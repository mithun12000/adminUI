<?php
namespace yii\adminUi\widget;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii;

/**
 * Bootstrap box component.
 *
 * @see http://getbootstrap.com/javascript/#dropdowns
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */
class Box extends Widget
{
    const TYPE_SOLID = "box-solid";
    const TYPE_DANGER = "box-danger";
    const TYPE_INFO = "box-info";
    const TYPE_PRIMARY = "box-primary";
    const TYPE_SUCCESS = "box-success";
    const TYPE_WARNING = "box-warning";
    const TYPE_DEFAULT = "";
    
    const POSITION_HEADER = 0;
    const POSITION_FOOTER = 1;

    /**
     * @var string the header content in the modal window.
     */
    public $header;
    
    public $headeroption = [];
    
    
    public $template = '{collapse} {remove}';
    
    public $buttons = [];
    
    public $usebutton = false;
    public $usebuttonPosition = self::POSITION_HEADER;
    
    public $buttonoption = [];
    
    public $bodytoption = [];


    public $headerIcon;
    
    public $headerButton;
    
    public $headerButtonGroup;
    
    public $loading = false;
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
        $this->initDefaultButtons();
        
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
        if($this->loading){
            echo Html::tag('div','',['class'=>'overlay']);
            echo Html::tag('div','',['class'=>'loading-img']);
        }
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
            
            if($this->usebutton){
                $content .= $this->renderButton(self::POSITION_HEADER);
            }
            
            return Html::tag('div', $content, array_merge(['class' => 'box-header'],  $this->headeroption));
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
        return Html::beginTag('div', array_merge($this->bodytoption,['class' => 'box-body'.' '.$this->bodytoption['class']]));
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
            $content = $this->footer;
            if($this->usebutton){
                $content .= $this->renderButton(self::POSITION_FOOTER);
            }
            return Html::tag('div', "\n" . $content . "\n", ['class' => 'box-footer clearfix']);            
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
    
    /**
     * Initializes the default button rendering callbacks
     */
    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['collapse'])) {
            $this->buttons['collapse'] = function ($option) {
                $option['class'] = 'btn '.$option['class'];
                $option['data-widget'] = 'collapse';
                $option['data-toggle'] = 'tooltip';
                $option['title'] = Yii::t('yii', 'Collapse');
                
                if($option['notitle']){
                    unset($option['notitle'],$option['title']);
                }
                
                return Html::tag('button','<i class="fa fa-minus"></i>', $option);
            };
        }
        if (!isset($this->buttons['remove'])) {
            $this->buttons['remove'] = function ($option) {
                $option['class'] = 'btn '.$option['class'];
                $option['data-widget'] = 'remove';
                $option['data-toggle'] = 'tooltip';
                $option['title'] = Yii::t('yii', 'Remove');
                
                if($option['notitle']){
                    unset($option['notitle'],$option['title']);
                }
                return Html::tag('button','<i class="fa fa-times"></i>', $option);
            };
        }        
    }
    
    /**
     * @inheritdoc
     */
    protected function rendertemplate($option)
    {
        return preg_replace_callback('/\\{([\w\-\/]+)\\}/', function ($matches) use ($option) {
            $name = $matches[1];
            if (isset($this->buttons[$name])) {
                return call_user_func($this->buttons[$name], $option);
            } else {
                return '';
            }
        }, $this->template);
    }
    
    protected function renderButton($position){
        if($this->usebuttonPosition == $position){
            $btns = $this->rendertemplate($this->buttonoption);
            return Html::tag('div', $btns, ['class' => 'pull-right box-tools']);
        }else{
            return '';
        }
    }
}
