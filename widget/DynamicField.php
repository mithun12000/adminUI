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
use yii\adminUi\assetsBundle\AdminUiDynamicFormAsset;
use yii\adminUi\assetsBundle\AdminUiInputMaskAsset;
use yii\helpers\Html;

/**
 * Dynamic form element based on Dynamic form Jquery plugin
 * 
 */
class DynamicField extends InputWidget
{
    public $form;


    public $type = 'textInput';
    
    public $list = false;
    
    public $mask = '';
    public $maskType = '';
    
    public $enableClientValidation;
    public $enableAjaxValidation;


    public static $autoIdPrefix = 'dynamicele';

    /**
     * Initializes the widget
     *
     * @throw InvalidConfigException
     */
    public function init(){
        parent::init();        
    }
    
    public function run() {
        $id = $this->getId();
        Html::addCssClass($this->options, "form-control");        
        //array of models
        $models = ArrayHelper::getValue($this->options, 'models');
        
        $data_count = 0;
        if(is_array($models)){
            foreach($models as $singleModel){
            if($singleModel->{$this->attribute}){
                $data_count++;
            }
        }
            
        }
        
        
        if($data_count && is_array($models) && count($models)){
            unset($this->options['models']);
            unset($this->options['model']);
            //unset($this->options['id']);
            
            $count = 0;
            foreach($models as $singleModel){
                //echo $singleModel->{$this->attribute};
                if($singleModel->{$this->attribute} == 0){
                    continue;
                }
                \Yii::trace(print_r($singleModel,true),__METHOD__);
                \Yii::trace(print_r($this->options,true),__METHOD__);   
                if($count){
                    echo Html::beginTag('div', ['id'=>  $id.$count]);
                }else{
                    echo Html::beginTag('div', ['id'=>  $id]);
                }
                echo $this->getInput($this->type, $this->list,$singleModel);
                echo Html::endTag('div');
                $count++;
            }
            \Yii::trace("render done problem ",__METHOD__);
        }else{ 
            $singleModel = ArrayHelper::getValue($this->options, 'model');
            unset($this->options['model']);
            unset($this->options['models']);
            
            echo Html::beginTag('div', ['id'=>  $id]);
            echo $this->getInput($this->type, $this->list,$singleModel);
            echo Html::endTag('div');
        }
        $this->generateButton();
        $this->registerAssets();
    }
    
    public function generateButton() {
        echo Html::beginTag('div', ['class'=>  'right']);        
        echo Html::a('<i class="fa fa-minus"></i>', '#',['id' => $this->getId().'_del','class'=>'btn btn-sm  btn-danger']);
        echo Html::a('<i class="fa fa-plus"></i>', '#',['id' => $this->getId().'_add','class'=>'btn btn-sm btn-success']);
        echo Html::endTag('div');
    }

    /**
     * Registers the needed assets
     */
    public function registerAssets(){
        $view = $this->getView();
        if($this->mask && $this->maskType){
            AdminUiInputMaskAsset::register($view);
            $this->clientOptions = [$this->maskType => $this->mask];
            $this->registerPlugin('inputmask');
        }
        AdminUiDynamicFormAsset::register($view);
        $id = $this->getId();
        $js = "jQuery('#$id').dynamicForm(\"#{$id}_add\",\"#{$id}_del\",".'{
                limit:10,
                normalizeFullForm:false,
                beforeClone:function(clones){console.log("call Before clone");console.log(clones);},
                afterClone:function(clone){console.log("call after clone");console.log(clone);if(clone.prop("tagName") == "input" || clone.prop("tagName") == "select" || clone.prop("tagName") == "textarea"){
                           if(clone.val()){
                              clone.val(""); 
                           } 
                        }else{
                            clone.find("input select textarea").val("");
                        }},
                beforeDelete:function(clone){console.log("call Before delete");console.log(clone);},
                afterDelete:function(clones){console.log("call after Delete");console.log(clones);}
            });';
        $view->registerJs($js);
        //$this->clientOptions = ["#plus", "#minus", {limit:5}];
        
    }
    
    /**
     * Returns the JS options for the field.
     * @return array the JS options
     */
    protected function getClientOptions()
    {
        $attribute = Html::getAttributeName($this->attribute);
        if (!in_array($attribute, $this->model->activeAttributes(), true)) {
            return [];
        }

        $enableClientValidation = $this->enableClientValidation || $this->enableClientValidation === null && $this->form->enableClientValidation;
        $enableAjaxValidation = $this->enableAjaxValidation || $this->enableAjaxValidation === null && $this->form->enableAjaxValidation;

        if ($enableClientValidation) {
            $validators = [];
            foreach ($this->model->getActiveValidators($attribute) as $validator) {
                /* @var $validator \yii\validators\Validator */
                $js = $validator->clientValidateAttribute($this->model, $attribute, $this->form->getView());
                if ($validator->enableClientValidation && $js != '') {
                    if ($validator->whenClient !== null) {
                        $js = "if ({$validator->whenClient}(attribute, value)) { $js }";
                    }
                    $validators[] = $js;
                }
            }
        }

        if (!$enableAjaxValidation && (!$enableClientValidation || empty($validators))) {
            return [];
        }

        $options = [];

        $inputID = Html::getInputId($this->model, $this->attribute);
        $options['id'] = $inputID;
        $options['name'] = $this->attribute;

        $options['container'] = isset($this->selectors['container']) ? $this->selectors['container'] : ".field-$inputID";
        $options['input'] = isset($this->selectors['input']) ? $this->selectors['input'] : "#$inputID";
        if (isset($this->selectors['error'])) {
            $options['error'] = $this->selectors['error'];
        } elseif (isset($this->errorOptions['class'])) {
            $options['error'] = '.' . implode('.', preg_split('/\s+/', $this->errorOptions['class'], -1, PREG_SPLIT_NO_EMPTY));
        } else {
            $options['error'] = isset($this->errorOptions['tag']) ? $this->errorOptions['tag'] : 'span';
        }

        $options['encodeError'] = !isset($this->errorOptions['encode']) || !$this->errorOptions['encode'];
        if ($enableAjaxValidation) {
            $options['enableAjaxValidation'] = true;
        }
        foreach (['validateOnChange', 'validateOnBlur', 'validateOnType', 'validationDelay'] as $name) {
            $options[$name] = $this->$name === null ? $this->form->$name : $this->$name;
        }

        if (!empty($validators)) {
            $options['validate'] = new JsExpression("function (attribute, value, messages, deferred) {" . implode('', $validators) . '}');
        }

        // only get the options that are different from the default ones (set in yii.activeForm.js)
        return array_diff_assoc($options, [
            'validateOnChange' => true,
            'validateOnBlur' => true,
            'validateOnType' => false,
            'validationDelay' => 200,
            'encodeError' => true,
            'error' => '.help-block',
        ]);
    }
}