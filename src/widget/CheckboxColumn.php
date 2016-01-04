<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\grid;

use yii;
use Closure;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * CheckboxColumn displays a column of checkboxes in a grid view.
 *
 * To add a CheckboxColumn to the [[GridView]], add it to the [[GridView::columns|columns]] configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => 'yii\grid\CheckboxColumn',
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 *
 * Users may click on the checkboxes to select rows of the grid. The selected rows may be
 * obtained by calling the following JavaScript code:
 *
 * ~~~
 * var keys = $('#grid').yiiGridView('getSelectedRows');
 * // keys is an array consisting of the keys associated with the selected rows
 * ~~~
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CheckboxColumn extends Column
{
    /**
     * @var string the ID of the controller that should handle the actions specified here.
     * If not set, it will use the currently active controller. This property is mainly used by
     * [[urlCreator]] to create URLs for different actions. The value of this property will be prefixed
     * to each action name to form the route of the action.
     */
    public $controller;
    
    public $buttons = [];
    
    /**
     * @var string the template used for composing each cell in the action column.
     * Tokens enclosed within curly brackets are treated as controller action IDs (also called *button names*
     * in the context of action column). They will be replaced by the corresponding button rendering callbacks
     * specified in [[buttons]]. For example, the token `{view}` will be replaced by the result of
     * the callback `buttons['view']`. If a callback cannot be found, the token will be replaced with an empty string.
     * @see buttons
     */
    public $template = '{bulkpublish} {bulkunpublish} {bulkdelete}';//{bulkrestore}
    
    /**
     * @var string the name of the input checkbox input fields. This will be appended with `[]` to ensure it is an array.
     */
    public $name = 'selection';
    /**
     * @var array HTML attributes for the checkboxes.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $checkboxOptions = [];
    /**
     * @var bool whether it is possible to select multiple rows. Defaults to `true`.
     */
    public $multiple = true;
    
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
     * @throws \yii\base\InvalidConfigException if [[name]] is not set.
     */
    public function init()
    {
        parent::init();
        if (empty($this->name)) {
            throw new InvalidConfigException('The "name" property must be set.');
        }
        if (substr($this->name, -2) !== '[]') {
            $this->name .= '[]';
        }
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
        if (!isset($this->buttons['bulkpublish'])) {
            $this->buttons['bulkpublish'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-leaf fa-lg"></span> '.Yii::t('yii', 'Publish'), $url, [
                    'title' => Yii::t('yii', 'Publish'),
                    'data-pjax' => '0',
                ]));
            };
        }
        if (!isset($this->buttons['bulkunpublish'])) {
            $this->buttons['bulkunpublish'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-unlink  fa-lg"></span> '.Yii::t('yii', 'Unpublish'), $url, [
                    'title' => Yii::t('yii', 'Unpublish'),
                    'data-pjax' => '0',
                ]));
            };
        }
        if (!isset($this->buttons['bulkdelete'])) {
            $this->buttons['bulkdelete'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-trash-o fa-lg"></span> '.Yii::t('yii', 'Delete'), $url, [
                    'title' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ]));
            };
        }
        
        if (!isset($this->buttons['bulkrestore'])) {
            $this->buttons['bulkrestore'] = function ($url, $model) {
                return Html::tag('li',Html::a('<span class="fa fa-undo fa-lg"></span> '.Yii::t('yii', 'Restore'), $url, [
                    'title' => Yii::t('yii', 'Restore'),
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
            $params[0] = $this->controller ? $this->controller . '/' . $action : $action;
            return Url::toRoute($params);
        }
    }
    
    /**
     * Renders the header cell content.
     * The default implementation simply renders [[header]].
     * This method may be overridden to customize the rendering of the header cell.
     * @return string the rendering result
     */
    protected function renderHeaderCellContent()
    {
        $name = rtrim($this->name, '[]') . '_all';
        $id = $this->grid->options['id'];
        $options = json_encode([
            'name' => $this->name,
            'multiple' => $this->multiple,
            'checkAll' => $name,
        ]);
        $this->grid->getView()->registerJs("jQuery('#$id').yiiGridView('setSelectionColumn', $options);");
        if ($this->header !== null || !$this->multiple) {
            return parent::renderHeaderCellContent();
        } else {
            $content = Html::tag('button',Html::checkBox($name, false, ['class' => 'select-on-check-all','data-target'=>$this->name,'data-checkall'=>1,'data-parent-id'=>$id]).' <span class="caret"></span>',[            
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

                if($buttons==''){
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
    
    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        if ($this->checkboxOptions instanceof Closure) {
            $options = call_user_func($this->checkboxOptions, $model, $key, $index, $this);
        } else {
            $options = $this->checkboxOptions;
            if (!isset($options['value'])) {
                $options['value'] = is_array($key) ? json_encode($key) : $key;
            }
        }

        return Html::checkbox($this->name, !empty($options['checked']), $options);
    }
}