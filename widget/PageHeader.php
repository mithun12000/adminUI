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
class PageHeader extends Widget
{
    const TYPE_OTHER = "div";
    const TYPE_SUB_COMPONENT = "h6";
    const TYPE_INFO = "h5";
    const TYPE_COMPONENT = "h4";
    const TYPE_TITLE = "h1";
    const TYPE_SECTION = "h3";
    const TYPE_DEFAULT = "h2";

    /**
     * @var string the header content in the modal window.
     */
    public $type;
    
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        $this->initOptions();
        
        echo Html::beginTag($this->type, $this->options) . "\n";
    }

    /**
     * Renders the widget.
     */
    public function run()
    {        
        echo "\n" . Html::endTag($this->type);
    }

    /**
     * Initializes the widget options.
     * This method sets the default values for various options.
     */
    protected function initOptions()
    {
        if(!$this->type){
            $this->type = self::TYPE_DEFAULT;
        }
        
        $this->options = array_merge([
            'class' => 'page-header',
        ], $this->options);
    }
}
