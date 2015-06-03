<?php
/* @var $this RolInstitucionController */
/* @var $model RolInstitucion */

$this->breadcrumbs=array(
	'Rol Institucions'=>array('index'),
	$model->name=>array('view','id'=>$model->name),
	'Update',
);

$this->menu=array(
	array('label'=>'List RolInstitucion', 'url'=>array('index')),
	array('label'=>'Create RolInstitucion', 'url'=>array('create')),
	array('label'=>'View RolInstitucion', 'url'=>array('view', 'id'=>$model->name)),
	array('label'=>'Manage RolInstitucion', 'url'=>array('admin')),
);
?>

<h1>Update RolInstitucion <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>