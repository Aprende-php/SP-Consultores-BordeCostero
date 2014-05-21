<?php

/**
 * This is the model class for table "proyecto".
 *
 * The followings are the available columns in table 'proyecto':
 * @property string $PRO_CORREL
 * @property string $PER_CORREL
 * @property string $INT_CORREL
 * @property string $PRO_FECHA
 * @property string $PRO_NOMBRE
 * @property string $PRO_DESCRIPCION
 * @property string $PRO_MONTO
 *
 * The followings are the available model relations:
 * @property ControlProyecto[] $controlProyectos
 * @property ControlProyecto[] $controlProyectos1
 * @property ControlProyecto[] $controlProyectos2
 * @property ModeloDeNegocios[] $modeloDeNegocioses
 * @property Presupuesto[] $presupuestos
 * @property Institucion $iNTCORREL
 * @property Persona $pERCORREL
 */
class Proyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_CORREL, INT_CORREL, PRO_FECHA, PRO_NOMBRE, PRO_MONTO', 'required'),
			array('PER_CORREL, INT_CORREL','length', 'max'=>12),
			array('PRO_MONTO', 'numerical', 'integerOnly'=>true, 'min'=>1,'tooSmall'=>'El Monto del Proyecto debe ser superior o igual a 1'),
			array('PRO_DESCRIPCION', 'safe'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRO_CORREL, PER_CORREL, INT_CORREL, PRO_FECHA, PRO_NOMBRE, PRO_DESCRIPCION, PRO_MONTO', 'safe', 'on'=>'search'),
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
			'controlProyectos' => array(self::HAS_MANY, 'ControlProyecto', 'PRO_CORREL'),
			'controlProyectos1' => array(self::HAS_MANY, 'ControlProyecto', 'PER_CORREL'),
			'controlProyectos2' => array(self::HAS_MANY, 'ControlProyecto', 'INT_CORREL'),
			'modeloDeNegocioses' => array(self::HAS_MANY, 'ModeloDeNegocios', 'PRO_CORREL'),
			'presupuestos' => array(self::HAS_MANY, 'Presupuesto', 'PRO_CORREL'),
			'iNTCORREL' => array(self::BELONGS_TO, 'Institucion', 'INT_CORREL'),
			'persona' => array(self::BELONGS_TO, 'Persona', 'PER_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRO_CORREL' => 'Proyecto',
			'PER_CORREL' => 'Persona',
			'INT_CORREL' => 'Institución',
			'PRO_FECHA' => 'Fecha',
			'PRO_NOMBRE' => 'Nombre',
			'PRO_DESCRIPCION' => 'Descripción',
			'PRO_MONTO' => 'Monto',
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

		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('INT_CORREL',$this->INT_CORREL,true);
		$criteria->compare('PRO_FECHA',$this->PRO_FECHA,true);
		$criteria->compare('PRO_NOMBRE',$this->PRO_NOMBRE,true);
		$criteria->compare('PRO_DESCRIPCION',$this->PRO_DESCRIPCION,true);
		$criteria->compare('PRO_MONTO',$this->PRO_MONTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}	
	public function searchRut()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('INT_CORREL',$this->INT_CORREL,true);
		$criteria->compare('PRO_FECHA',$this->PRO_FECHA,true);
		$criteria->compare('PRO_NOMBRE',$this->PRO_NOMBRE,true);
		$criteria->compare('PRO_DESCRIPCION',$this->PRO_DESCRIPCION,true);
		$criteria->compare('PRO_MONTO',$this->PRO_MONTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
