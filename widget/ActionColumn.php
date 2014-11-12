<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\grid;

use Yii;
use Closure;
use yii\helpers\Html;
use yii\helpers\Url;
use common\component\AppActiveRecord;

/**
 * ActionColumn is a column for the [[GridView]] widget that displays buttons for viewing and manipulating the items.
 *
 * To add an ActionColumn to the gridview, add it to the [[GridView::columns|columns]] configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => 'yii\grid\ActionColumn',
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ActionColumn extends Column
{
    /**
     * @var string the ID of the controller that should handle the actions specified here.
     * If not set, it will use the currently active controller. This property is mainly used by
     * [[urlCreator]] to create URLs for different actions. The value of this property will be prefixed
     * to each action name to form the route of the action.
     */
    public $controller;
    /**
     * @var string the template used for composing each cell in the action column.
     * Tokens enclosed within curly brackets are treated as controller action IDs (also called *button names*
     * in the context of action column). They will be replaced by the corresponding button rendering callbacks
     * specified in [[buttons]]. For example, the token `{view}` will be replaced by the result of
     * the callback `buttons['view']`. If a callback cannot be found, the token will be replaced with an empty string.
     * @see buttons
     */
    public $template = '{view} {update} {delete}';
    /**
     * @var array button rendering callbacks. The array keys are the button names (without curly brackets),
     * and the values are the corresponding button rendering callbacks. The callbacks should use the following
     * signature:
     *
     * ```php
     * function ($url, $model) {
     *     // return the button HTML code
     * }
     * ```
     *
     * where `$url` is the URL that the column creates for the button, and `$model` is the model object
     * being rendered for the current row.
     *
     * You can add further conditions to the button, for example only display it, when the model is
     * editable (here assuming you have a status field that indicates that):
     *
     * ```php
     * [
     *     'update' => function ($url, $model) {
     *         return $model->status == 'editable' ? Html::a('Update', $url) : '';
     *     };
     * ],
     * ```
     */
    public $buttons = [];
    /**
     * @var callable a callback that creates a button URL using the specified model information.
     * The signature of the callback should be the same as that of [[createUrl()]].
     * If this property is not set, button URLs will be created using [[createUrl()]].
     */
    public $urlCreator;
    
    
    /**
     * @var callback a callback that check access of that button creation.     * 
     * 
     */
    public $checkaccess;


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->contentOptions = array_merge($this->contentOptions,['width'=>90]);
        $this->initDefaultButtons();
        
        if(!$this->checkaccess){
            $this->checkaccess = function($url){
                return true;
            };
        }
    }

    /**
     * Initializes the default button rendering callbacks
     */
    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-eye fa-lg"></span> '.Yii::t('yii', 'View'), $url, [
                    'title' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ]));
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-edit fa-lg"></span> '.Yii::t('yii', 'Edit'), $url, [
                    'title' => Yii::t('yii', 'Edit'),
                    'data-pjax' => '0',
                ]));
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-trash-o fa-lg"></span> '.Yii::t('yii', 'Delete'), $url, [
                    'title' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]));
            };
        }
        
        if (!isset($this->buttons['restore'])) {
            $this->buttons['restore'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-undo fa-lg"></span> '.Yii::t('yii', 'Restore'), $url, [
                    'title' => Yii::t('yii', 'Restore'),
                    'data-pjax' => '0',
                ]));
            };
        }
        
        if (!isset($this->buttons['setpassword'])) {
            $this->buttons['setpassword'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-shield fa-lg"></span> '.Yii::t('yii', 'Set Password'), $url, [
                    'title' => Yii::t('yii', 'Set Password'),
                    'data-pjax' => '0',
                ]));
            };
        }
        
        if (!isset($this->buttons['changepass'])) {
            $this->buttons['changepass'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-shield fa-lg"></span> '.Yii::t('yii', 'Change Password'), $url, [
                    'title' => Yii::t('yii', 'Change Password'),
                    'data-pjax' => '0',
                ]));
            };
        }
        
        if (!isset($this->buttons['publish'])) {
            $this->buttons['publish'] = function ($url, $model) {
                if($model->state != AppActiveRecord::STATUS_PUBLISH){
                    return Html::tag('li',Html::a('<span class="fa fa-check-square-o fa-lg"></span> '.Yii::t('yii', 'Publish'), $url, [
                        'title' => Yii::t('yii', 'Publish'),
                        'data-pjax' => '0',
                        'data-method' => 'post',
                    ]));
                }else{
                    return '';
                }                
            };
        }
        
        if (!isset($this->buttons['unpublish'])) {
            $this->buttons['unpublish'] = function ($url, $model) {
                if($model->state != AppActiveRecord::STATUS_UNPUBLISH){
                    return Html::tag('li',Html::a('<span class="fa fa-minus-square-o fa-lg"></span> '.Yii::t('yii', 'Unpublish'), $url, [
                        'title' => Yii::t('yii', 'Unpublish'),
                        'data-pjax' => '0',
                        'data-method' => 'post',
                    ]));
                }else{
                    return '';
                }
            };
        }
        
        if (!isset($this->buttons['sendtopublish'])) {
            $this->buttons['sendtopublish'] = function ($url, $model) {
                if($model->state != AppActiveRecord::STATUS_PUBLISHREADY){
                    return Html::tag('li',Html::a('<span class="fa fa-plus-square-o fa-lg"></span> '.Yii::t('yii', 'Ready to be Publish'), $url, [
                        'title' => Yii::t('yii', 'Ready to be Publish'),
                        'data-pjax' => '0',
                        'data-method' => 'post',
                    ]));
                }else{
                    return '';
                }
            };
        }
        if (!isset($this->buttons['deallocate'])) {
            $this->buttons['deallocate'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-edit fa-lg"></span> '.Yii::t('yii', 'Deallocate'), $url, [
                    'title' => Yii::t('yii', 'Deallocate'),
                    'data-pjax' => '0',
                ]));
            };
        }
    }

    /**
     * Creates a URL for the given action and model.
     * This method is called for each button and each row.
     * @param string $action the button name (or action ID)
     * @param \yii\db\ActiveRecord $model the data model
     * @param mixed $key the key associated with the data model
     * @param integer $index the current row index
     * @return string the created URL
     */
    public function createUrl($action, $model, $key, $index)
    {
        if ($this->urlCreator instanceof Closure) {
            return call_user_func($this->urlCreator, $action, $model, $key, $index);
        } else {
            $params = is_array($key) ? $key : ['id' => (string) $key];
            $params[0] = $this->controller ? $this->controller . '/' . $action : $action;

            return Url::toRoute($params);
        }
    }

    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        $content = Html::tag('button','Actions <span class="caret"></span>',[            
                    'type'  => 'button',
                    'class' => 'btn btn-default dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ]);
        
        
        
        $buttons = preg_replace_callback('/\\{([\w\-\/]+)\\}/', function ($matches) use ($model, $key, $index) {
            $name = $matches[1];
            $module = \Yii::$app->user->can(\Yii::$app->controller->module->id.'/'.\Yii::$app->controller->id.'/'.$name);
            if($module){
                if (isset($this->buttons[$name])) {
                    $url = $this->createUrl($name, $model, $key, $index);
                    if(call_user_func($this->checkaccess, $url)){
                        return call_user_func($this->buttons[$name], $url, $model);
                    }
                    else{
                        return '';
                    }
               } 
            else {
                    return '';
                }
            }
        }, $this->template);
        
        if($buttons =='' || $buttons ==' '){
            return $buttons;
        }
        $content .= Html::tag('ul',$buttons,[             
                    'class' => 'dropdown-menu pull-right',
                    'role' => 'menu',
                ]);
        
        return Html::tag('div',$content, [
                    'class' => 'dropdown'
                ]);
    }
}
