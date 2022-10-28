<?php
/* @var $this ObatController */
/* @var $model Obat */

$this->breadcrumbs=array(
	'Obats'=>array('index'),
	$model->kode_obat,
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'Update Obat', 'url'=>array('update', 'id'=>$model->kode_obat)),
	array('label'=>'Delete Obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_obat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>View Obat #<?php echo $model->kode_obat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_obat',
		'nama_obat',
		'tanggal',
		'harga',
	),
)); ?>
