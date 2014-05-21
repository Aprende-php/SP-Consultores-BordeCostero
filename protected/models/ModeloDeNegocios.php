<?php

/**
 * This is the model class for table "modelo_de_negocios".
 *
 * The followings are the available columns in table 'modelo_de_negocios':
 * @property string $MOD_CORREL
 * @property string $PRO_CORREL
 * @property string $MOD_SOCIO_CLAVE
 * @property string $MOD_ACTIVIDAD
 * @property string $MOD_RECURSOS
 * @property string $MOD_PROPUESTA
 * @property string $MOD_REL_CLIENTE
 * @property string $MOD_CANALES
 * @property string $MOD_SEGMENTO_CLIENTE
 * @property string $MOD_COSTOS
 * @property string $MOD_INGRESO
 * @property string $MOD_VIGENCIA
 *
 * The followings are the available model relations:
 * @property Proyecto $pROCORREL
 */
class ModeloDeNegocios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modelo_de_negocios';
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
			array('PRO_CORREL', 'length', 'max'=>10),
			array('MOD_SOCIO_CLAVE, MOD_ACTIVIDAD, MOD_RECURSOS, MOD_PROPUESTA, MOD_REL_CLIENTE, MOD_CANALES, MOD_SEGMENTO_CLIENTE, MOD_COSTOS, MOD_INGRESO, MOD_VIGENCIA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('MOD_CORREL, PRO_CORREL, MOD_SOCIO_CLAVE, MOD_ACTIVIDAD, MOD_RECURSOS, MOD_PROPUESTA, MOD_REL_CLIENTE, MOD_CANALES, MOD_SEGMENTO_CLIENTE, MOD_COSTOS, MOD_INGRESO, MOD_VIGENCIA', 'safe', 'on'=>'search'),
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
			'MOD_CORREL' => 'Modelo',
			'PRO_CORREL' => 'Proyecto',
			'MOD_SOCIO_CLAVE' => 'Socio Clave',
			'MOD_ACTIVIDAD' => 'Actividad',
			'MOD_RECURSOS' => 'Recursos',
			'MOD_PROPUESTA' => 'Propuesta',
			'MOD_REL_CLIENTE' => 'Relación Cliente',
			'MOD_CANALES' => 'Canales',
			'MOD_SEGMENTO_CLIENTE' => 'Segmento Cliente',
			'MOD_COSTOS' => 'Costos',
			'MOD_INGRESO' => 'Ingreso',
			'MOD_VIGENCIA' => 'Vigencia',
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

		$criteria->compare('MOD_CORREL',$this->MOD_CORREL,true);
		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('MOD_SOCIO_CLAVE',$this->MOD_SOCIO_CLAVE,true);
		$criteria->compare('MOD_ACTIVIDAD',$this->MOD_ACTIVIDAD,true);
		$criteria->compare('MOD_RECURSOS',$this->MOD_RECURSOS,true);
		$criteria->compare('MOD_PROPUESTA',$this->MOD_PROPUESTA,true);
		$criteria->compare('MOD_REL_CLIENTE',$this->MOD_REL_CLIENTE,true);
		$criteria->compare('MOD_CANALES',$this->MOD_CANALES,true);
		$criteria->compare('MOD_SEGMENTO_CLIENTE',$this->MOD_SEGMENTO_CLIENTE,true);
		$criteria->compare('MOD_COSTOS',$this->MOD_COSTOS,true);
		$criteria->compare('MOD_INGRESO',$this->MOD_INGRESO,true);
		$criteria->compare('MOD_VIGENCIA',$this->MOD_VIGENCIA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModeloDeNegocios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
