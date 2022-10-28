<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->kode_obat=>array('view','id'=>$model->kode_obat),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'View Obat', 'url'=>array('view', 'id'=>$model->kode_obat)),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Update Obat <?php echo $model->kode_obat; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>