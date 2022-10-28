<?php
/* @var $this PendaftaranController */
/* @var $data Pendaftaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_pendaftaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_pendaftaran), array('view', 'id'=>$data->kode_pendaftaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_antrian')); ?>:</b>
	<?php echo CHtml::encode($data->no_antrian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan_poli')); ?>:</b>
	<?php echo CHtml::encode($data->tujuan_poli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokter')); ?>:</b>
	<?php echo CHtml::encode($data->dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_pembiayaan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_pembiayaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_jaminan')); ?>:</b>
	<?php echo CHtml::encode($data->no_jaminan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rekamedik')); ?>:</b>
	<?php echo CHtml::encode($data->no_rekamedik); ?>
	<br />

	*/ ?>

</div>