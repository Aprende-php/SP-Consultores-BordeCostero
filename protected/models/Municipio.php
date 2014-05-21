<?php

/**
 * This is the model class for table "municipio".
 *
 * The followings are the available columns in table 'municipio':
 * @property string $MUN_CORREL
 * @property string $COM_CORREL
 * @property string $MUN_NOMBRE
 * @property string $MUN_RUT
 * @property string $MUN_CONTACTO
 * @property string $MUN_VIGENCIA
 *
 * The followings are the available model relations:
 * @property Comuna $cOMCORREL
 */
class Municipio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'municipio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_CORREL, MUN_NOMBRE, MUN_RUT, MUN_VIGENCIA', 'required'),
			array('COM_CORREL', 'length', 'max'=>10),
			array('MUN_NOMBRE, MUN_RUT, MUN_CONTACTO', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MUN_CORREL, COM_CORREL, MUN_NOMBRE, MUN_RUT, MUN_CONTACTO, MUN_VIGENCIA', 'safe', 'on'=>'search'),
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
			'cOMCORREL' => array(self::BELONGS_TO, 'Comuna', 'COM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MUN_CORREL' => 'Municipio',
			'COM_CORREL' => 'Comuna',
			'MUN_NOMBRE' => 'Nombre',
			'MUN_RUT' => 'Rut',
			'MUN_CONTACTO' => 'Contacto',
			'MUN_VIGENCIA' => 'Vigencia',
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

		$criteria->compare('MUN_CORREL',$this->MUN_CORREL,true);
		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('MUN_NOMBRE',$this->MUN_NOMBRE,true);
		$criteria->compare('MUN_RUT',$this->MUN_RUT,true);
		$criteria->compare('MUN_CONTACTO',$this->MUN_CONTACTO,true);
		$criteria->compare('MUN_VIGENCIA',$this->MUN_VIGENCIA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Municipio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
