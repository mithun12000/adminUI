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
    
    public $clientId;
    
    protected $data = [];

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
                $this->data[][$this->name] = $singleModel->{$this->attribute};
                $count++;
            }
            \Yii::trace("render done problem ",__METHOD__);
        }else{ 
            $singleModel = ArrayHelper::getValue($this->options, 'model');
            unset($this->options['model']);
            unset($this->options['models']);
        }
        
        $this->options['value'] = '';
        echo Html::beginTag('div', ['class'=>  'input-group']);
        echo $this->getInput($this->type, $this->list,$singleModel);
        $this->generateButton();
        echo Html::endTag('div');
        
        $this->registerAssets();
    }
    
    public function generateButton() {
        echo Html::beginTag('div', ['class'=>  'input-group-btn']);        
        echo Html::a('<i class="fa fa-minus"></i>', '#',['id' => $this->getId().'_del','class'=>'btn btn-danger']);
        echo Html::a('<i class="fa fa-plus"></i>', '#',['id' => $this->getId().'_add','class'=>'btn btn-success']);
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
        
        //$totalClientlength = count($this->form->attributes);
        
        
        //$form_client_option = Json::encode($this->getClientOptions());
        //print($form_client_option);
        $form_client_option = $this->getClientOptions();
        
        AdminUiDynamicFormAsset::register($view);
        $id = $this->getId();
        $js = "jQuery('#$this->clientId').dynamicForm(\"#{$id}_add\",\"#{$id}_del\",".'{
                limit:10,
                data:'.Json::encode($this->data).',
                normalizeFullForm:false,
                normalizeSource:false,
                afterRemoveAll:function(){
                    jQuery("#'.$this->getId().'_dis").remove();
                },
                afterInit:function(){
                    console.log("call after initialize");
                },
                cloneDone:function(clone){
                    console.log("call after clone done");                    
                    //console.log(jQuery(clone));
                    if(jQuery(".'.$this->clientId.'").length>0 && jQuery("#'.$this->getId().'_dis").length==0){
                        jQuery("#'.$this->clientId.'").find(".input-group-btn").append(jQuery(\''.Html::tag('button','<i class="fa fa-minus"></i>',['id' => $this->getId().'_dis','class'=>'btn disabled']).'\'));                        
                    }
                    
                    var validate = '.Json::encode($this->getClientOptions()).';
                        

                    var id;
                    jQuery(clone).find("input, checkbox, select, textarea").each(function(){
                        id = jQuery(this).attr("id");
                    });
                    
                    validate.id = id;
                    validate.input = "#"+id;
                    validate.container = "#"+jQuery(clone).attr("id");
                    
                    jQuery("#'.$this->form->id.'").yiiActiveForm("add",validate);
                    
                },
                beforeRemove:function(clone){
                    console.log("call before removing clone");
                    //console.log(clone);
                    //console.log(jQuery(clone));
                    
                    var id;
                    jQuery(clone).find("input, checkbox, select, textarea").each(function(){
                        id = jQuery(this).attr("id");
                    });
                    
                    jQuery("#'.$this->form->id.'").yiiActiveForm("remove",id);
                }
            });';
        $view->registerJs($js);
        //$this->clientOptions = ["#plus", "#minus", {limit:5}];
        
    }
}
