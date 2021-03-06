 <div id="shop">
	<!-- PAGE TITLE -->
		<header id="page-title">
			<div class="container">
				<h1><?php echo "Contact Us";//$model->title; ?></h1>
				<?php 
					echo'
					<ul class="breadcrumb">
						<li>'.CHtml::link('Home', array('/site/index'), array("class"=>"")).'</li>
						<li class="active">Contact Us</li>
					</ul>';

				?>
			</div>
		</header>
	<section class="container">

		<div class="row" style="margin: 0 auto; text-align:left;">
			<!-- CONTACT -->
			<div class="col-md-6">
				<?php if(Yii::app()->user->hasFlash('contact')): ?>

				<div class="flash-success">
					<?php echo Yii::app()->user->getFlash('contact'); ?>
				</div>

				<?php else: ?>

				<div class="form">

				<?php $form=$this->beginWidget('CActiveForm'); ?>

					<p class="note">Fields with <span class="required">*</span> are required.</p>

					<?php echo $form->errorSummary($model); ?>
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'name'); ?>
								<?php echo $form->textField($model,'name', array('data-msg-required'=>'Please enter your name.', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'email'); ?>
								<?php echo $form->textField($model,'email', array('data-msg-required'=>'Please enter your email address.', 'data-msg-email'=>'Please enter a valid email address.', 'maxlength'=>'100', 'class'=>'form-control')); ?>
							</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'phone'); ?>
								<?php echo $form->textField($model,'phone', array('data-msg-required'=>'Please enter your Phone.', 'class'=>'form-control')); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<?php echo $form->labelEx($model,'subject'); ?>
						<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128, 'data-msg-required'=>'Please enter the subject.', 'class'=>'form-control')); ?>
					</div>

					<div class="row">
						<?php echo $form->labelEx($model,'body'); ?>
						<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'maxlength'=>5000, 'data-msg-required'=>'Please enter your message.', 'class'=>'form-control')); ?>
					</div>

					<?php if(CCaptcha::checkRequirements()): ?>
					<div class="row">
						<?php echo $form->labelEx($model,'verifyCode'); ?>
						<div>
						<?php $this->widget('CCaptcha'); ?>
						<?php echo $form->textField($model,'verifyCode'); ?>
						</div>
						<div class="hint">Please enter the letters as they are shown in the image above.
						<br/>Letters are not case-sensitive.</div>
					</div>
					<?php endif; ?>

					<div class="row submit">
						<?php echo CHtml::submitButton('Submit', array('id'=>"contact_submit", 'type'=>"submit", 'value'=>"Send Message", 'class'=>"btn btn-primary btn-lg", 'data-loading-text'=>"Loading...")); ?>
					</div>

				<?php $this->endWidget(); ?>

				</div><!-- form -->

				<?php endif; ?>
			</div>	
		</div>
	</section>
</div>