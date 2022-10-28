<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_pendaftaran'); ?>
		<?php echo $form->textField($model,'kode_pendaftaran',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_kunjungan'); ?>
		<?php echo $form->textField($model,'tanggal_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_antrian'); ?>
		<?php echo $form->textField($model,'no_antrian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tujuan_poli'); ?>
		<?php echo $form->textField($model,'tujuan_poli',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dokter'); ?>
		<?php echo $form->textField($model,'dokter',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_pembiayaan'); ?>
		<?php echo $form->textField($model,'jenis_pembiayaan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_jaminan'); ?>
		<?php echo $form->textField($model,'no_jaminan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_pasien'); ?>
		<?php echo $form->textField($model,'nama_pasien',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_rekamedik'); ?>
		<?php echo $form->textField($model,'no_rekamedik',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->