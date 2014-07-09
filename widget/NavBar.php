<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\widget;

use Yii;
use yii\adminUi\assetsBundle\AdminUiAsset as AdminUiAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * NavBar renders a navbar HTML component.
 *
 * Any content enclosed between the [[begin()]] and [[end()]] calls of NavBar
 * is treated as the content of the navbar. You may use widgets such as [[Nav]]
 * or [[\yii\widgets\Menu]] to build up such content. For example,
 *
 * ```php
 * use yii\bootstrap\NavBar;
 * use yii\widgets\Menu;
 *
 * NavBar::begin(['brandLabel' => 'NavBar Test']);
 * echo Nav::widget([
 *     'items' => [
 *         ['label' => 'Home', 'url' => ['/site/index']],
 *         ['label' => 'About', 'url' => ['/site/about']],
 *     ],
 * ]);
 * NavBar::end();
 * ```
 *
 * @see http://getbootstrap.com/components/#navbar
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class NavBar extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag. The following special options are recognized:
     *
     * - tag: string, defaults to "nav", the name of the container tag.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];
    /**
     * @var array the HTML attributes for the container tag. The following special options are recognized:
     *
     * - tag: string, defaults to "div", the name of the container tag.
     *
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $containerOptions = [];    
    /**
     * @var string text to show for screen readers for the button to toggle the navbar.
     */
    public $screenReaderToggleText = 'Toggle navigation';
    /**
     * @var boolean whether the navbar content should be included in an inner div container which by default
     * adds left and right padding. Set this to false for a 100% width navbar.
     */
    public $renderInnerContainer = false;
    /**
     * @var array the HTML attributes of the inner container.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $innerContainerOptions = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        $this->clientOptions = false;
        Html::addCssClass($this->options, 'navbar');
        if ($this->options['class'] === 'navbar') {
            Html::addCssClass($this->options, 'navbar-default');
        }
        
        if (empty($this->options['role'])) {
            $this->options['role'] = 'navigation';
        }
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'nav');
        echo Html::beginTag($tag, $options);
        echo $this->renderToggleButton();        
        echo Html::beginTag('div', ['class' => 'navbar-right']);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {        
        echo Html::endTag('div');        
        $tag = ArrayHelper::remove($this->options, 'tag', 'nav');
        echo Html::endTag($tag);
        AdminUiAsset::register($this->getView());
    }

    /**
     * Renders collapsible toggle button.
     * @return string the rendering toggle button.
     */
    protected function renderToggleButton()
    {        
        $screenReader = "<span class=\"sr-only\">{$this->screenReaderToggleText}</span>";
        $screenReader .= "<span class=\"icon-bar\"></span>";
        $screenReader .= "<span class=\"icon-bar\"></span>";
        $screenReader .= "<span class=\"icon-bar\"></span>";

        return Html::tag('a',"{$screenReader}", [
            'class' => 'navbar-btn sidebar-toggle',
            'data-toggle'=> 'offcanvas', 
            'role'=>'button']
        );
    }
}
