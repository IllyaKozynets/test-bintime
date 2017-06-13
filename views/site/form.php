<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * @var app\models\Form $model
 */
$form = ActiveForm::begin();
echo $form->field($model, 'emails')->textarea()->hint('Use ";" delimiter to separate e-mails') ?>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end() ?>