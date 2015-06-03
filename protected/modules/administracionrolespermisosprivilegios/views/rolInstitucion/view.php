<?php
/* @var $this RolInstitucionController */
/* @var $model RolInstitucion */

$this->breadcrumbs=array(
	'Rol Institucions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List RolInstitucion', 'url'=>array('index')),
	array('label'=>'Create RolInstitucion', 'url'=>array('create')),
	array('label'=>'Update RolInstitucion', 'url'=>array('update', 'id'=>$model->name)),
	array('label'=>'Delete RolInstitucion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RolInstitucion', 'url'=>array('admin')),
);
?>

<h1>View RolInstitucion #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'type',
		'description',
		'bizrule',
		'data',
	),
)); ?>
