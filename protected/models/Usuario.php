<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $PER_CORREL
 * @property string $USU_ROLE
 * @property string $USU_PASSWORD
 * @property string $USU_ESTADO
 *
 * The followings are the available model relations:
 * @property Persona $pERCORREL
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_ROLE, USU_PASSWORD', 'required'),
			array('USU_ROLE, USU_PASSWORD', 'length', 'max'=>45),
			array('USU_ESTADO', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, USU_ROLE, USU_PASSWORD, USU_ESTADO', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_CORREL' => 'Per Correl',
			'USU_ROLE' => 'Usu Role',
			'USU_PASSWORD' => 'Usu Password',
			'USU_ESTADO' => 'Usu Estado',
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

		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('USU_ROLE',$this->USU_ROLE,true);
		$criteria->compare('USU_PASSWORD',$this->USU_PASSWORD,true);
		$criteria->compare('USU_ESTADO',$this->USU_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
