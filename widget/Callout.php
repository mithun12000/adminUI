<?php

/* 
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @project AdminUi
 * @projecturl https://github.com/mithun12000/adminUI
 * @country India
 */

namespace yii\adminUi\widget;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Callout renders an callout bootstrap element.
 *
 * For example,
 *
 * ```php
 * echo Callout::widget([
 *     'options' => [
 *         'class' => 'callout-danger',
 *     ],
 *     'header' => 'hi callout',
 *     'body' => 'Say hello...',
 * ]);
 * ```
 *
 * The following example will show the content enclosed between the [[begin()]]
 * and [[end()]] calls within the alert box:
 *
 * ```php
 * Callout::begin([
 *     'options' => [
 *         'class' => 'alert-warning',
 *     ],
 *     'header' => 'hi callout'
 * ]);
 *
 * echo 'Say hello...';
 *
 * Callout::end();
 * ```
 *
 * @see http://getbootstrap.com/components/#alerts
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */
class Callout extends Widget
{
    /**
     * @var string the body content in the alert component. Note that anything between
     * the [[begin()]] and [[end()]] calls of the Alert widget will also be treated
     * as the body content, and will be rendered before this.
     */
    public $body;
    /**
     * @var string the header content in the callout component.
     */
    public $header;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        $this->initOptions();

        echo Html::beginTag('div', $this->options) . "\n";
        echo $this->renderHeaderBegin() . "\n";
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo "\n" . $this->renderBodyEnd();
        echo "\n" . Html::endTag('div');
    }

    /**
     * Renders the close button if any before rendering the content.
     * @return string the rendering result
     */
    protected function renderHeaderBegin()
    {
        if($this->header){
            return Html::tag('h4',  $this->header);
        }else{
            return null;
        }
    }

    /**
     * Renders the alert body (if any).
     * @return string the rendering result
     */
    protected function renderBodyEnd()
    {
        return $this->body . "\n";
    }

    /**
     * Initializes the widget options.
     * This method sets the default values for various options.
     */
    protected function initOptions()
    {
        Html::addCssClass($this->options, 'callout');
    }
}
