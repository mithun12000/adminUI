<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\widget;

use Yii;
use yii\base\Model;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\web\JsExpression;

/**
 * InputWidget is the base class for widgets that collect user inputs.
 *
 * An input widget can be associated with a data model and an attribute,
 * or a name and a value. If the former, the name and the value will
 * be generated automatically.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class InputWidget extends Widget
{
    /**
     * @var Model the data model that this widget is associated with.
     */
    public $model;
    /**
     * @var string the model attribute that this widget is associated with.
     */
    public $attribute;
    /**
     * @var string the input name. This must be set if [[model]] and [[attribute]] are not set.
     */
    public $name;
    /**
     * @var string the input value.
     */
    public $value;
    /**
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];
    
    
    /**
     * @var array the default options for the error tags. The parameter passed to [[error()]] will be
     * merged with this property when rendering the error tag.
     * The following special options are recognized:
     *
     * - tag: the tag name of the container element. Defaults to "div".
     * - encode: whether to encode the error output. Defaults to true.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $errorOptions = ['class' => 'help-block'];
    
    /**
     * @var boolean whether to enable client-side data validation.
     * If not set, it will take the value of [[ActiveForm::enableClientValidation]].
     */
    public $enableClientValidation;
    /**
     * @var boolean whether to enable AJAX-based data validation.
     * If not set, it will take the value of [[ActiveForm::enableAjaxValidation]].
     */
    public $enableAjaxValidation;
    /**
     * @var boolean whether to perform validation when the value of the input field is changed.
     * If not set, it will take the value of [[ActiveForm::validateOnChange]].
     */
    public $validateOnChange;
    /**
     * @var boolean whether to perform validation when the input field loses focus.
     * If not set, it will take the value of [[ActiveForm::validateOnBlur]].
     */
    public $validateOnBlur;
    /**
     * @var boolean whether to perform validation while the user is typing in the input field.
     * If not set, it will take the value of [[ActiveForm::validateOnType]].
     * @see validationDelay
     */
    public $validateOnType;
    /**
     * @var integer number of milliseconds that the validation should be delayed when the user types in the field
     * and [[validateOnType]] is set true.
     * If not set, it will take the value of [[ActiveForm::validationDelay]].
     */
    public $validationDelay;
    /**
     * @var array the jQuery selectors for selecting the container, input and error tags.
     * The array keys should be "container", "input", and/or "error", and the array values
     * are the corresponding selectors. For example, `['input' => '#my-input']`.
     *
     * The container selector is used under the context of the form, while the input and the error
     * selectors are used under the context of the container.
     *
     * You normally do not need to set this property as the default selectors should work well for most cases.
     */
    public $selectors = [];


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        if (!$this->hasModel() && $this->name === null) {
            throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
        }
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }
        parent::init();
    }

    /**
     * @return boolean whether this widget is associated with a data model.
     */
    protected function hasModel($model=false)
    {
        if($model){
            return $model instanceof Model && $this->attribute !== null;
        }else{
            return $this->model instanceof Model && $this->attribute !== null;
        }
    }
    
    /**
     * Generates an input
     */
    protected function getInput($type, $list = false,$armodel=false)
    {
        if(!$armodel){
            $armodel = $this->model;
        }
        if ($this->hasModel($armodel)) {
            $input = 'active' . ucfirst($type);
            $this->options = ($this->name) ? array_merge($this->options,['name'=>  $this->name]) : $this->options;
            return $list ?
                Html::$input($armodel, $this->attribute, $this->data, $this->options) :
                Html::$input($armodel, $this->attribute, $this->options);
        }
        $input = $type;
        $checked = false;
        if ($type == 'radio' || $type == 'checkbox') {
            $this->options['value'] = $this->value;
            $checked = ArrayHelper::remove($this->options, 'checked', false);
        }
        return $list ?
            Html::$input($this->name, $this->value, $this->data, $this->options) :
            (($type == 'checkbox' || $type == 'radio') ?
                Html::$input($this->name, $checked, $this->options) :
                Html::$input($this->name, $this->value, $this->options));
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
            'validationDelay' => 500,
            'encodeError' => true,
            'error' => '.help-block',
        ]);
    }
}
