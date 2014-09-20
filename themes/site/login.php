<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\adminUi\widget\Alert;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var \common\models\LoginForm $model
 */
$this->title = 'Sign In';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-box" id="login-box">
    <div class="header"><?= Html::encode($this->title) ?></div>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="body bg-gray">
        <?php if ($flash = Yii::$app->session->getFlash("notification")){
             Alert::begin([
                'options' => [
                    'class' => 'alert-info alert-dismissable',
                ],
                'icon' => 'fa fa-info',
                'closeButton' => [],
            ]); 
             ?>
        <p><?= $flash ?></p>
        <?php Alert::end(); 
        } ?>
            
            <div class="form-group">
                <?= $form->field($model, 'username') ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput() ?>
            </div>          
            <div class="form-group">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
        </div>
        <div class="footer">                                                               
            <?= Html::submitButton('Sign me in', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

            <p><?= Html::a("I forgot my password", ['site/forgot'])?></p>
    </div>
    <?php ActiveForm::end(); ?>
</div>
