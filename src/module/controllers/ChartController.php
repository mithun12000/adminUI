<?php

namespace yii\adminUi\module\controllers;

use yii\web\Controller;

class ChartController extends Controller
{
    
    public function actionMorris() {
        return $this->render('morris');
    }
    
    public function actionFlot() {
        return $this->render('flot');
    }
    
    public function actionInline() {
        return $this->render('inline');
    }
}