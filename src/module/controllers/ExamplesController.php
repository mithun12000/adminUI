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
    
    public function actionError404() {
        return $this->render('404');
    }
    
    public function actionError500() {
        return $this->render('500');
    }
    
    public function actionEmpty() {
        return $this->render('blank');
    }
}