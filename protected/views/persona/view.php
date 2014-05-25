<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->PER_CORREL,
);

$per=PersonaInfo::model()->findByAttributes(array('PER_CORREL'=>$model->PER_CORREL));

$this->menu=array(
	array('label'=>'Agregar Persona', 'url'=>array('create')),
	array('label'=>'Editar Persona', 'url'=>array('//PersonaInfo/update','id'=>$per->PER_INFO_CORREL)),

	array('label'=>'Eliminar Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PER_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Administrar Persona', 'url'=>array('admin')),
    array('label'=>'Añadir Informacion Personal', 'url'=>array('//PersonaInfo/create','id'=>$model->PER_CORREL)),
    array('label'=>'Añadir Beneficio Social', 'url'=>array('//beneficioSocial/create','id'=>$model->PER_CORREL)),
    array('label'=>'Añadir Proyecto', 'url'=>array('//Proyecto/create','id'=>$model->PER_CORREL)),
);
?>
<?php echo BsHtml::pageHeader('Ver','Persona '.$model->PER_CORREL) ?>

<?php 

echo "<h3>Informacion Base</h3>";
$this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'PER_CORREL',
		'PER_RUT',
		'PER_NACIMIENTO',
	),
));
if (PersonaInfo::model()->exists("PER_CORREL=$model->PER_CORREL")) {
	echo "<h3>Informacion Extra</h3>";
	$this->widget('zii.widgets.CDetailView',array(
		'htmlOptions' => array(
			'class' => 'table table-striped table-condensed table-hover',
		),
		'data'=>$per,
		'attributes'=>array(
			array(
				'name'=>'Comuna',
				'value'=>Comuna::model()->findByPk($per->COM_CORREL)->COM_NOMBRE
				),
			'PER_NOMBRES',
			'PER_PATERNO',
			'PER_MATERNO',
			'PER_DIRECCION',
			'PER_TELEFONO',
			'PER_VIGENCIA',
		),
	));
 	if ($per->PER_LATITUD!=0&&$per->PER_LONGITUD!=0) {
		$this->widget('ext.RGmapPicker.RGmapPicker',
		                array(
		                    'title' => 'Location',
		                    'element_id' => 'GMapLocation',
		                    'map_width' => 670,
		                    'map_height' => 300,
		                    'map_latitude' => "$per->PER_LATITUD", # Your default position
		                    'map_longitude' => "$per->PER_LONGITUD", # Your default p
		                    'map_location_name' => 'Yo Vivo Aqui',
		                    'Zoom'=>16
		                )
		            );
		 }
}
?>