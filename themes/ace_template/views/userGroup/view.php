<?php
/* @var $this UserGroupController */
/* @var $model UserGroup */
?>

<?php
$this->breadcrumbs=array(
	'User Groups'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List UserGroup', 'url'=>array('index')),
	array('label'=>'Create UserGroup', 'url'=>array('create')),
	array('label'=>'Update UserGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserGroup', 'url'=>array('admin')),
);
?>

<h1>View UserGroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'title',
		'details',
	),
)); ?>