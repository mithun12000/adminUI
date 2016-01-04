<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-widgets
 * @version 1.0.0
 */

namespace yii\adminUi\widget;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;
use yii\helpers\Html;

/**
 * Dynamic form element based on Dynamic form Jquery plugin
 * 
 */
class InputAddon extends InputWidget
{
    const POS_BEFORE = 'before';
    const POS_AFTER = 'after';

    public $type = 'textInput';
    
    public $list = false;
    
    public $position = self::POS_AFTER;
    
    public $icon = '';


    /**
     * Initializes the widget
     *
     * @throw InvalidConfigException
     */
    public function init(){
        parent::init();
    }
    
    public function run() {
        echo '<div class="input-group">';
        if($this->position == self::POS_BEFORE){
            echo $this->generateAddon();
        }
        Html::addCssClass($this->options, "form-control");        
        echo $this->getInput($this->type, $this->list,$singleModel);        
        if($this->position == self::POS_AFTER){
            echo $this->generateAddon();
        }
        echo '</div>';
    }
    
    public function generateAddon() {
        $option = ['class' => $this->icon];
        Html::addCssClass($option, "fa");        
        $content = Html::tag('i','',$option);
        echo Html::tag('span', $content,['class'=> 'input-group-addon']);
    }
}