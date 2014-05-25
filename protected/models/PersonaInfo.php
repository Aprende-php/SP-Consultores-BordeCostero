<?php

/**
 * This is the model class for table "persona_info".
 *
 * The followings are the available columns in table 'persona_info':
 * @property string $PER_INFO_CORREL
 * @property string $PER_CORREL
 * @property string $COM_CORREL
 * @property string $PER_NOMBRES
 * @property string $PER_PATERNO
 * @property string $PER_MATERNO
 * @property string $PER_DIRECCION
 * @property string $PER_LATITUD
 * @property string $PER_LONGITUD
 * @property string $PER_TELEFONO
 * @property string $PER_VIGENCIA
 *
 * The followings are the available model relations:
 * @property Persona $pERCORREL
 * @property Comuna $cOMCORREL
 */
class PersonaInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_CORREL, COM_CORREL', 'required'),
			array('PER_INFO_CORREL, PER_TELEFONO', 'length', 'max'=>45),
			array('PER_CORREL, COM_CORREL, PER_LATITUD, PER_LONGITUD', 'length', 'max'=>10),
			array('PER_NOMBRES', 'length', 'max'=>20),
			array('PER_PATERNO, PER_MATERNO', 'length', 'max'=>15),
			array('PER_DIRECCION, PER_VIGENCIA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_INFO_CORREL, PER_CORREL, COM_CORREL, PER_NOMBRES, PER_PATERNO, PER_MATERNO, PER_DIRECCION, PER_LATITUD, PER_LONGITUD, PER_TELEFONO, PER_VIGENCIA', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pERCORREL' => array(self::BELONGS_TO, 'Persona', 'PER_CORREL'),
			'cOMCORREL' => array(self::BELONGS_TO, 'Comuna', 'COM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_INFO_CORREL' => 'Información de Persona',
			'PER_CORREL' => 'Persona',
			'COM_CORREL' => 'Comuna',
			'PER_NOMBRES' => 'Nombres',
			'PER_PATERNO' => 'Paterno',
			'PER_MATERNO' => 'Materno',
			'PER_DIRECCION' => 'Direccion',
			'PER_LATITUD' => 'Latitud',
			'PER_LONGITUD' => 'Longitud',
			'PER_TELEFONO' => 'Telefono',
			'PER_VIGENCIA' => 'Vigencia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PER_INFO_CORREL',$this->PER_INFO_CORREL,true);
		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('PER_NOMBRES',$this->PER_NOMBRES,true);
		$criteria->compare('PER_PATERNO',$this->PER_PATERNO,true);
		$criteria->compare('PER_MATERNO',$this->PER_MATERNO,true);
		$criteria->compare('PER_DIRECCION',$this->PER_DIRECCION,true);
		$criteria->compare('PER_LATITUD',$this->PER_LATITUD,true);
		$criteria->compare('PER_LONGITUD',$this->PER_LONGITUD,true);
		$criteria->compare('PER_TELEFONO',$this->PER_TELEFONO,true);
		$criteria->compare('PER_VIGENCIA',$this->PER_VIGENCIA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PersonaInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
