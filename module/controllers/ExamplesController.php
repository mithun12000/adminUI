<?php

namespace yii\adminUi\module\controllers;

use yii\web\Controller;

class ExamplesController extends Controller
{
    
    public function actionInvoice() {
        return $this->render('invoice');
    }
    
    public function actionLockscreen() {
        return $this->render('lockscreen');
    }
    
    public function actionLogin() {
        return $this->render('login');
    }
    
    public function actionRegister() {
        return $this->render('register');
    }
}