<?php

use app\models\StaticFunctions;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Candidates */
/* @var $form yii\widgets\ActiveForm */

;
$js1 = <<<JS
		$('.datepicker').pickadate({
			selectMonths: true,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
	
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'DD-YY-MM HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
JS;
$this->registerJs($js1);
?>


<?php $form = ActiveForm::begin(); ?>
<div class="card  mx-auto"  style="margin-bottom: 10px">

     <div class="row">
            <div class="card-body p-4  rounded">
                <div class="row" style="margin-bottom: 5px">
                    <h2>Personal Info</h2>
                    <div class="col-6" >
                        <div class="box">
                            <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('candidates',$model->id,$model->images)?>)"></div>
                            <div class="upload-options">
                                <label class="btn-light">
                                    <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'website_link')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                    </div>

                </div>
            </div>

         <div class="card-body p-4  rounded">
             <div class="row" style="margin-bottom: 5px">
                 <h2>Education</h2>
                <div class="col-6">
                    <?= $form->field($model, 'school')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'university')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>
                </div>
             </div>
         </div>

         <div class="card-body p-4  rounded">
             <div class="row" style="margin-bottom: 5px">
                 <h2>Experience</h2>
                <div class="col-6">
                    <?= $form->field($model, 'experience_title')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'from_year')->textInput(['class'=>'form-control datepicker']) ?>
                |</div>
                <div class="col-6">
                    <?= $form->field($model, 'to_year')->textInput(['class'=>'form-control datepicker']) ?>
                </div>
             </div>
         </div>

         <div class="card-body p-4  rounded">
             <div class="row" style="margin-bottom: 5px">
                 <h2>Skills</h2>
                <div class="col-6">
                    <?= $form->field($model, 'skill_first')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'skill_second')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'skill_third')->textInput(['maxlength' => true]) ?>
                </div>
             </div>
         </div>
         <div class="card-body p-4  rounded">
             <div class="row" style="margin-bottom: 5px">
                 <h2>Social Links</h2>
                <div class="col-6">
                    <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'tweetter_link')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-6">
                    <?= $form->field($model, 'status')->textInput() ?>
                </div>
             </div>
         </div>
    </div>

</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
