<?php
/* @var $this GenTextController */
/* @var $model GenText */
/* @var $form CActiveForm */
?>

<div class="form">

<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-th-large"></i> Website General Texts 
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php //echo $model->activity_title; ?>Create
		</small>
    	<?php echo CHtml::link('<i class="ace-icon fa fa-plus"></i> Manage All Texts', array('admin'), array('class' => 'btn btn-primary fRight', 'style'=>"")); ?>
	</h1>
						
    <div class="bClear" style=""></div>
</div>

<div class="row">
 <div class="col-xs-12 col-sm-12 widget-container-col ui-sortable" id="widget-container-col-1" style="min-height: 210px;">
		<div class="widget-box ui-sortable-handle" id="widget-box-1" style="opacity: 1;">
			<div class="widget-header">
				<h5 class="widget-title smaller"> <span style="font-weight:600;"><?php //echo $model->activity_title; ?>General Text Editor</span> </h5>

				<div class="widget-toolbar">
					<a href="#" data-action="fullscreen" class="orange2">
						<i class="ace-icon fa fa-expand"></i>
					</a>

					<a href="#" data-action="reload">
						<i class="ace-icon fa fa-refresh"></i>
					</a>

					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>

					<a href="#" data-action="close">
						<i class="ace-icon fa fa-times"></i>
					</a>
				</div>
			</div>

			<div class="widget-body">
				<div class="widget-main form">
				 
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'gen-text-form',
						'enableAjaxValidation'=>false,
							'htmlOptions' => array(
								'enctype' => 'multipart/form-data',
								'class' => 'form-horizontal',
							), 

					)); ?>
						<p class="note">Fields with <span class="required">*</span> are required.</p>

						<?php echo $form->errorSummary($model); ?>
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'title', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								 <?php echo $form->textField($model, 'title', array('placeholder'=>'Title','rows' => 2, 'span' => 5, 'maxlength' => 255)); ?>
								 <?php echo $form->error($model,'title')?>       
							</div>
						</div>						
						 <?php echo $form->errorSummary($model); ?>
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'category', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'category', CHtml::listData(GenTextCategory::model()->findAll(array('condition' => 'status=1', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'category')?>       
							</div>
						</div>						
						 
						<div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'status', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-9">
								<?php echo $form->dropDownList($model, 'status', CHtml::listData(Status::model()->findAll(array('condition' => '', 'order' => 'title')), 'id', 'title'), array('class' => 'span5')); ?>
								 <?php echo $form->error($model,'status'); ?>       
							</div>
						</div>
						 <div class="form-group marginBot10px">
							<?php echo $form->labelEx($model,'detail', array('class' =>'col-sm-2 control-label no-padding-right')); ?>
							<div class="col-sm-11">
							<?php
								$this->widget('application.extensions.yii-ckeditor.CKEditorWidget', array(
									'model' => $model,
									'attribute' => 'detail',
									// editor options http://docs.ckeditor.com/#!/api/CKEDITOR.config
									'config' => array(
										'language' => 'en',
									//'toolbar' => 'Basic',
									),
								));
							?>
							<?php echo $form->error($model,'detail'); ?>
							</div>
						</div>							
						<div class="form-actions">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-mini iframe', 'style' => 'margin-left: 12px; margin-top: 20px; padding: 6px 35px;')); ?>
						</div>
						<?php $this->endWidget(); ?>

				</div>
			</div>
		</div>
	</div>
</div>