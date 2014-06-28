<?php

namespace yii\adminUi\module\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionWidget()
    {
        return $this->render('widget');
    }
    
    public function actionMorris() {
        return $this->render('morris');
    }
    
    public function actionFlot() {
        return $this->render('flot');
    }
    
    public function actionInline() {
        return $this->render('inline');
    }
    
    public function actionCalendar() {
        return $this->render('calendar');
    }
    
    public function actionMailbox() {
        return $this->render('mailbox');
    }
}
