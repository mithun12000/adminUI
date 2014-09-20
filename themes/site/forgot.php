<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \common\models\LoginForm $model
 */
$this->title = 'Forgot Password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-box" id="login-box">
    <div class="header"><?= Html::encode($this->title) ?></div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="body bg-gray">
            <div class="form-group">
                <?= $form->field($model, 'username') ?>
            </div>
        </div>
        <div class="footer">
            <?= Html::submitButton('Retrive my password', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a('Login',['site/login'], ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
</div>
