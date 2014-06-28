<?php
namespace yii\adminUi\widget;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Bootstrap box component.
 *
 * @see http://getbootstrap.com/javascript/#dropdowns
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */
class SmallBox extends Widget
{ 
    public $header;
    
    public $Icon;
    
    public $caption;
    
    public $url;    
    
    public $color;
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        $this->initOptions();
        
        echo Html::beginTag('div', $this->options) . "\n";
        echo Html::beginTag('div', ['class' => 'small-box '.$this->color]) . "\n";
        echo $this->renderHeader() . "\n";
        echo $this->renderBodyBegin() . "\n";
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        if($this->Icon !== NULL){
            echo Html::tag('i', '',['class'=>'ion '.$this->Icon]);
        }
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
            $content = Html::tag('h3', $this->header);
            
            if($this->caption !== NULL){
                $content .= Html::tag('p', $this->caption);
            }
            return Html::tag('div', $content, ['class' => 'inner']);
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
        return Html::beginTag('div', ['class' => 'icon']);
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
        if ($this->url !== null) {
            return Html::tag('a', 'More info <i class="fa fa-arrow-circle-right"></i>', ['class' => 'small-box-footer','href'=>$this->url]);
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
        if(!$this->color){
            $this->color = 'bg-aqua';
        }
        $this->options = array_merge([
            'class' => 'col-lg-3 col-xs-6',
        ], $this->options);
        //Html::addCssClass($this->options, 'modal');
    }
}
