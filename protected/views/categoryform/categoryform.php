<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>
<?php if(Yii::app()->user->hasFlash('category_form')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('category_form'); ?>
    </div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-categoryform-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

    <?php
    $this->widget('application.extensions.ReCaptcha', array(
        'model'     => $model,
        'attribute' => 'verifyCode',

    ));
    ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->

<?php endif; ?>