<?php
/* @var $this PendaftaranController */
/* @var $model Pendaftaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pendaftaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_pendaftaran'); ?>
		<?php echo $form->textField($model,'kode_pendaftaran',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kode_pendaftaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_kunjungan'); ?>
		<?php echo $form->textField($model,'tanggal_kunjungan'); ?>
		<?php echo $form->error($model,'tanggal_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_antrian'); ?>
		<?php echo $form->textField($model,'no_antrian'); ?>
		<?php echo $form->error($model,'no_antrian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tujuan_poli'); ?>
		<?php echo $form->textField($model,'tujuan_poli',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tujuan_poli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokter'); ?>
		<?php echo $form->textField($model,'dokter',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_pembiayaan'); ?>
		<?php echo $form->textField($model,'jenis_pembiayaan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'jenis_pembiayaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_jaminan'); ?>
		<?php echo $form->textField($model,'no_jaminan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'no_jaminan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pasien'); ?>
		<?php echo $form->textField($model,'nama_pasien',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nama_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_rekamedik'); ?>
		<?php echo $form->textField($model,'no_rekamedik',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'no_rekamedik'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->