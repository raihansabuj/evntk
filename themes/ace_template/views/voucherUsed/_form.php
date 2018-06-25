<?php
/* @var $this VoucherUsedController */
/* @var $model VoucherUsed */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'voucher-used-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_voucher_id'); ?>
		<?php echo $form->textField($model,'user_voucher_id'); ?>
		<?php echo $form->error($model,'user_voucher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_voucher_id'); ?>
		<?php echo $form->textField($model,'event_voucher_id'); ?>
		<?php echo $form->error($model,'event_voucher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'used_on'); ?>
		<?php echo $form->textField($model,'used_on'); ?>
		<?php echo $form->error($model,'used_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->