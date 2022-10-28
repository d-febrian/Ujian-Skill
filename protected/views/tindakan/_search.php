<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_tindakan'); ?>
		<?php echo $form->textField($model,'kode_tindakan',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_tindakan'); ?>
		<?php echo $form->textField($model,'nama_tindakan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'petugas'); ?>
		<?php echo $form->textField($model,'petugas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya'); ?>
		<?php echo $form->textField($model,'biaya'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->