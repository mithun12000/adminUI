<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \common\models\LoginForm $model
 */
$this->title = 'Reset Password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-box" id="login-box">
    <div class="header"><?= Html::encode($this->title) ?></div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= Html::activeHiddenInput($model, 'password_reset_token')?>
        <div class="body bg-gray">
            <div class="form-group">
                <?= $form->field($model, 'password1')->passwordInput(['maxlength' => 16]) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'password2')->passwordInput(['maxlength' => 16]) ?>
            </div>
        </div>
        <div class="footer">                                                               
            <?= Html::submitButton('Set Password', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
</div>
