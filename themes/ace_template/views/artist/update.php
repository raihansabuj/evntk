<?php
/* @var $this ArtistController */
/* @var $model Artist */

$this->breadcrumbs=array(
	'Artists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artist', 'url'=>array('index')),
	array('label'=>'Create Artist', 'url'=>array('create')),
	array('label'=>'View Artist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Artist', 'url'=>array('admin')),
);
?>

<h1>Update Artist <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>