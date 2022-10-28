<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */

$this->breadcrumbs=array(
	'Pendaftarans'=>array('index'),
	$model->kode_pendaftaran,
);

$this->menu=array(
	array('label'=>'List Pendaftaran', 'url'=>array('index')),
	array('label'=>'Create Pendaftaran', 'url'=>array('create')),
	array('label'=>'Update Pendaftaran', 'url'=>array('update', 'id'=>$model->kode_pendaftaran)),
	array('label'=>'Delete Pendaftaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_pendaftaran),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pendaftaran', 'url'=>array('admin')),
);
?>

<h1>View Pendaftaran #<?php echo $model->kode_pendaftaran; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_pendaftaran',
		'tanggal_kunjungan',
		'no_antrian',
		'tujuan_poli',
		'dokter',
		'jenis_pembiayaan',
		'no_jaminan',
		'nama_pasien',
		'tgl_lahir',
		'alamat',
		'no_rekamedik',
	),
)); ?>
