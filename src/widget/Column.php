<?php

namespace yii\adminUi\widget;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Column renders a Bootstrap Grid component.
 *
 * @see http://getbootstrap.com/css/#grid
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */
class Column extends Widget
{
    const SIZE_FULL = 12;
    const SIZE_HALF = 6;
    const SIZE_BIG = 8;
    const SIZE_SMALL = 4;    
    const SIZE_DEFAULT = 12;
    
    const TYPE_MOBILE = 'col-xs-';
    const TYPE_TABLET = 'col-sm-';
    const TYPE_BIG = 'col-lg-';
    const TYPE_DESKTOP = 'col-md-';
    
    const DEFAULT_TYPE = 'col-md-';

    
    /**
     * @var array the grid
     * example: [
     *      [
     *          type => self::TYPE_DESKTOP,
     *          size => self::SIZE_SMALL
     *      ],
     *      [
     *          type => self::TYPE_MOBILE,
     *          size => self::SIZE_FULL
     *      ],
     *      [
     *          type => self::TYPE_MOBILE,
     *          size => 3,
     *          positiontype => 'pull',     options are pull|push|offset
     *      ],
     * ]
     */
    public $grid;
    
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
        if($this->grid){
            $this->options = array_merge([
            'class' => $this->getGridClass().isset($this->options['class']) ? ' '.$this->options['class'] : '',
            ], $this->options);
        }else{
            $this->options = array_merge([
            'class' => self::DEFAULT_TYPE.self::SIZE_DEFAULT,
            ], $this->options);
        }
    }
    
    /**
     * Generate Grid Class for Div element
     * @return string Html Class Value
     */
    private function getGridClass() {
        $class = [];
        foreach($this->grid as $grid){
            if(!isset($grid['type']) || !isset($grid['size'])){
                throw new InvalidConfigException(get_called_class() . ' must have type and size.');
            }
            if(!isset($grid['positiontype']))
                $class[] = $grid['type'].$grid['size'];
            else
                $class[] = $grid['type'].$grid['positiontype'].'-'.$grid['size'];            
        }
        return implode(' ',$class);
    }
}
