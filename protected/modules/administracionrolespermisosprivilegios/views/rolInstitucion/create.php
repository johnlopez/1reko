<?php
/* @var $this RolInstitucionController */
/* @var $model RolInstitucion */

$this->breadcrumbs=array(
	'Rol Institucions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RolInstitucion', 'url'=>array('index')),
	array('label'=>'Manage RolInstitucion', 'url'=>array('admin')),
);
?>

<h1>Create RolInstitucion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>