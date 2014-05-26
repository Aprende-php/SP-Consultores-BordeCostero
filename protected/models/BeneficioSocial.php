<?php

/**
 * This is the model class for table "beneficio_social".
 *
 * The followings are the available columns in table 'beneficio_social':
 * @property string $BEN_CORREL
 * @property string $PER_CORREL
 * @property string $INT_CORREL
 * @property string $BEN_FECHA
 * @property string $BEN_TIPO
 * @property string $BEN_NOMBRE
 * @property string $BEN_DESCRIPCION
 * @property string $BEN_MONTO
 *
 * The followings are the available model relations:
 * @property Persona $pERCORREL
 * @property Institucion $iNTCORREL
 */
class BeneficioSocial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'beneficio_social';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_CORREL, INT_CORREL, BEN_FECHA', 'required'),
			array('PER_CORREL, INT_CORREL', 'length', 'max'=>10),
			array('BEN_TIPO', 'length', 'max'=>11),
			array('BEN_MONTO', 'length', 'max'=>12),
			array('BEN_NOMBRE', 'length','max'=>100),
			array('BEN_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BEN_CORREL, PER_CORREL, INT_CORREL, BEN_FECHA, BEN_TIPO, BEN_NOMBRE, BEN_DESCRIPCION, BEN_MONTO', 'safe', 'on'=>'search'),
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
			'iNTCORREL' => array(self::BELONGS_TO, 'Institucion', 'INT_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

	
	public function attributeLabels()
	{
		return array(
			'BEN_CORREL' => 'N° Beneficio',
			'PER_CORREL' => 'Rut Beneciario',
			'INT_CORREL' => 'Institucion',
			'BEN_FECHA' => 'Fecha Beneficio',
			'BEN_TIPO' => 'Tipo Beneficio',
			'BEN_NOMBRE' => 'Nombre Beneficio',
			'BEN_DESCRIPCION' => 'Descripcion',
			'BEN_MONTO' => 'Monto',
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

		$criteria->compare('BEN_CORREL',$this->BEN_CORREL,true);
		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('INT_CORREL',$this->INT_CORREL,true);
		$criteria->compare('BEN_FECHA',$this->BEN_FECHA,true);
		$criteria->compare('BEN_TIPO',$this->BEN_TIPO,true);
		$criteria->compare('BEN_NOMBRE',$this->BEN_NOMBRE,true);
		$criteria->compare('BEN_DESCRIPCION',$this->BEN_DESCRIPCION,true);
		$criteria->compare('BEN_MONTO',$this->BEN_MONTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BeneficioSocial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
