<?php

namespace yii\adminUi\module\controllers;

use yii\web\Controller;

class FormsController extends Controller
{
    
    public function actionAdvanced() {
        return $this->render('advanced');
    }
    
    public function actionEditors() {
        return $this->render('editors');
    }
    
    public function actionGeneral() {
        return $this->render('general');
    }
}