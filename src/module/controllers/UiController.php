<?php

namespace yii\adminUi\module\controllers;

use yii\web\Controller;

class UiController extends Controller
{
    
    public function actionButtons() {
        return $this->render('buttons');
    }
    
    public function actionEmpty() {
        return $this->render('empty');
    }
    
    public function actionGeneral() {
        return $this->render('general');
    }
    
    public function actionIcons() {
        return $this->render('icons');
    }
    
    public function actionJqueryui() {
        return $this->render('jqueryui');
    }
    
    public function actionSliders() {
        return $this->render('sliders');
    }
    
    public function actionTimeline() {
        return $this->render('timeline');
    }
}