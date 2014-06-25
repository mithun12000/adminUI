<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\widget;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Dropdown renders a Bootstrap dropdown menu component.
 *
 * @see http://getbootstrap.com/javascript/#dropdowns
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since 2.0
 */
class Box extends Widget
{
    const TYPE_SOLID = "box-solid";
    const TYPE_DANGER = "box-danger";
    const TYPE_INFO = "box-info";
    const TYPE_PRIMARY = "box-primary";
    const TYPE_SUCCESS = "box-success";
    const TYPE_DEFAULT = "";

    /**
     * @var string the header content in the modal window.
     */
    public $header;
    
    public $headerIcon;
    
    public $headerButton;
    
    public $headerButtonGroup;
    /**
     * @var string the footer content in the modal window.
     */
    public $footer;
    /**
     * @var string the modal size. Can be MODAL_LG or MODAL_SM, or empty for default.
     */
    public $type;
    
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        $this->initOptions();
        
        echo Html::beginTag('div', $this->options) . "\n";
        echo Html::beginTag('div', ['class' => 'box ' . $this->type]) . "\n";
        echo $this->renderHeader() . "\n";
        echo $this->renderBodyBegin() . "\n";
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo "\n" . $this->renderBodyEnd();
        echo "\n" . $this->renderFooter();
        echo "\n" . Html::endTag('div'); // modal-content
        echo "\n" . Html::endTag('div');
    }

    /**
     * Renders the header HTML markup of the modal
     * @return string the rendering result
     */
    protected function renderHeader()
    {
        if ($this->header !== null) {
            $content = '';
            if($this->headerIcon !== null){
               $content .=  Html::tag('i', '', ['class' => $this->headerIcon]);
            }
            
            $content .=  Html::tag('h3', "\n" . $this->header . "\n", ['class' => 'box-title']);
            
            if($this->headerButton !== null){
               $content .=  Html::tag('div', $this->headerButton, ['class' => ($this->headerButtonGroup) ? 'pull-right box-tools btn-group':'pull-right box-tools']);
            }
            
            return Html::tag('div', $content, ['class' => 'box-header']);
        } else {
            return null;
        }
    }

    /**
     * Renders the opening tag of the modal body.
     * @return string the rendering result
     */
    protected function renderBodyBegin()
    {
        return Html::beginTag('div', ['class' => 'box-body']);
    }

    /**
     * Renders the closing tag of the modal body.
     * @return string the rendering result
     */
    protected function renderBodyEnd()
    {
        return Html::endTag('div');
    }

    /**
     * Renders the HTML markup for the footer of the modal
     * @return string the rendering result
     */
    protected function renderFooter()
    {
        if ($this->footer !== null) {
            return Html::tag('div', "\n" . $this->footer . "\n", ['class' => 'box-footer clearfix']);
        } else {
            return null;
        }
    }

    /**
     * Initializes the widget options.
     * This method sets the default values for various options.
     */
    protected function initOptions()
    {
        $this->options = array_merge([
            'class' => 'infobox',
        ], $this->options);
        //Html::addCssClass($this->options, 'modal');
    }
}
