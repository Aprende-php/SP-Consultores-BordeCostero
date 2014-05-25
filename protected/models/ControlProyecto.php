<?php

/**
 * This is the model class for table "control_proyecto".
 *
 * The followings are the available columns in table 'control_proyecto':
 * @property string $CON_CORREL
 * @property string $PRO_CORREL
 * @property string $CON_DESCRIPCION
 * @property string $CON_RECOMENDACION
 * @property string $CON_ESTADO
 * @property string $CON_FECHA_CONTROL
 *
 * The followings are the available model relations:
 * @property Proyecto $pROCORREL
 */
class ControlProyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'control_proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRO_CORREL', 'required'),
			array('PRO_CORREL, CON_ESTADO', 'length', 'max'=>10),
			array('CON_DESCRIPCION, CON_RECOMENDACION, CON_FECHA_CONTROL', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CON_CORREL, PRO_CORREL, CON_DESCRIPCION, CON_RECOMENDACION, CON_ESTADO, CON_FECHA_CONTROL', 'safe', 'on'=>'search'),
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
			'pROCORREL' => array(self::BELONGS_TO, 'Proyecto', 'PRO_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CON_CORREL' => 'N° Control',
			'PRO_CORREL' => 'N° Proyecto',
			'CON_DESCRIPCION' => 'Descripcion',
			'CON_RECOMENDACION' => 'Recomendacion',
			'CON_ESTADO' => 'Estado',
			'CON_FECHA_CONTROL' => 'Fecha Control',
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

		$criteria->compare('CON_CORREL',$this->CON_CORREL,true);
		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('CON_DESCRIPCION',$this->CON_DESCRIPCION,true);
		$criteria->compare('CON_RECOMENDACION',$this->CON_RECOMENDACION,true);
		$criteria->compare('CON_ESTADO',$this->CON_ESTADO,true);
		$criteria->compare('CON_FECHA_CONTROL',$this->CON_FECHA_CONTROL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ControlProyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
