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
class Column extends Widget
{
    const TYPE_FULL = "col-md-12";
    const TYPE_HALF = "col-md-6";
    const TYPE_BIG = "col-md-8";
    const TYPE_SMALL = "col-md-4";
    const TYPE_DEFAULT = "col-md-12";

    
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
    }

    /**
     * Renders the widget.
     */
    public function run()
    {        
        echo "\n" . Html::endTag('div');
    }

    /**
     * Initializes the widget options.
     * This method sets the default values for various options.
     */
    protected function initOptions()
    {
        if($this->type){
            $this->options = array_merge([
            'class' => $this->type,
            ], $this->options);
        }else{
            $this->options = array_merge([
            'class' => self::TYPE_DEFAULT,
            ], $this->options);
        }
    }
}