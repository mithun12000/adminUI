<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014
 * @package yii2-widgets
 * @version 1.0.0
 */

namespace yii\adminUi\widget;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\base\InvalidConfigException;
use yii\adminUi\assetsBundle\AdminUiDatePickerAsset;
use yii\helpers\Html;

/**
 * Dynamic form element based on Dynamic form Jquery plugin
 * 
 */
class Daterange extends InputWidget
{
    public $type = 'textInput';
    
    public $list = false;
    
    public $mask = '';
    public $maskType = '';

    /**
     * Initializes the widget
     *
     * @throw InvalidConfigException
     */
    public function init(){
        parent::init();        
        $this->options = array_merge($this->options,['readonly'=>'true']);
        
    }
    
    public function run() {
        //$id = $this->getId();
        Html::addCssClass($this->options, "form-control");        
        echo $this->getInput($this->type, $this->list,$singleModel);        
        $this->registerAssets();
    }
    
    /**
     * Registers the needed assets
     */
    public function registerAssets(){
        $view = $this->getView();
        AdminUiDatePickerAsset::register($view);
        
        $options = ArrayHelper::merge([
            'timePicker' => false,
            'format' => 'YYYY-MM-DD',
        ], $this->clientOptions);
        $options = Json::encode($options);
        
        $id = $this->options['id'];
        $js = "jQuery('#$id').daterangepicker({timePicker: false, format: 'YYYY-MM-DD',separator:' | '})";
        $view->registerJs($js);
    }
}