<?php

namespace yii\adminUi\module\controllers;

use yii\web\Controller;

class TablesController extends Controller
{
    
    public function actionData() {
        return $this->render('data');
    }
    
    public function actionSimple() {
        return $this->render('simple');
    }
}