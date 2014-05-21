<?php

/**
 * This is the model class for table "presupuesto".
 *
 * The followings are the available columns in table 'presupuesto':
 * @property string $PRE_CORREL
 * @property string $ITE_CORREL
 * @property string $PRO_CORREL
 * @property string $PRE_DESCRIPCION
 * @property string $PRE_MONTO
 *
 * The followings are the available model relations:
 * @property Item $iTECORREL
 * @property Proyecto $pROCORREL
 */
class Presupuesto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'presupuesto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ITE_CORREL, PRO_CORREL,PRE_DESCRIPCION,PRE_MONTO', 'required','message'=>'Porfavor ingrese el valor de {attribute}.'),
			array('ITE_CORREL, PRO_CORREL', 'length', 'max'=>10),
			array('PRE_MONTO', 'length', 'max'=>12),
			array('PRE_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRE_CORREL, ITE_CORREL, PRO_CORREL, PRE_DESCRIPCION, PRE_MONTO', 'safe', 'on'=>'search'),
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
			'iTECORREL' => array(self::BELONGS_TO, 'Item', 'ITE_CORREL'),
			'pROCORREL' => array(self::BELONGS_TO, 'Proyecto', 'PRO_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRE_CORREL' => 'Presupuesto',
			'ITE_CORREL' => 'Item',
			'PRO_CORREL' => 'Proyecto',
			'PRE_DESCRIPCION' => 'Descripción',
			'PRE_MONTO' => 'Monto',
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

		$criteria->compare('PRE_CORREL',$this->PRE_CORREL,true);
		$criteria->compare('ITE_CORREL',$this->ITE_CORREL,true);
		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('PRE_DESCRIPCION',$this->PRE_DESCRIPCION,true);
		$criteria->compare('PRE_MONTO',$this->PRE_MONTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Presupuesto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
