<?php
/* @var $this RolInstitucionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rol Institucions',
);

$this->menu=array(
	array('label'=>'Create RolInstitucion', 'url'=>array('create')),
	array('label'=>'Manage RolInstitucion', 'url'=>array('admin')),
);
?>

<h1>Rol Institucions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
