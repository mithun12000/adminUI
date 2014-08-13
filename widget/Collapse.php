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
 * Collapse renders an accordion bootstrap javascript component.
 *
 * For example:
 *
 * ```php
 * echo Collapse::widget([
 *     'items' => [
 *         // equivalent to the above
 *         'Collapsible Group Item #1' => [
 *             'content' => 'Anim pariatur cliche...',
 *             // open its content by default
 *             'contentOptions' => ['class' => 'in']
 *         ],
 *         // another group item
 *         'Collapsible Group Item #2' => [
 *             'content' => 'Anim pariatur cliche...',
 *             'contentOptions' => [...],
 *             'options' => [...],
 *         ],
 *     ]
 * ]);
 * ```
 *
 * @see http://getbootstrap.com/javascript/#collapse
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @since 2.0
 */
class Collapse extends Widget
{
    /**
     * @var array list of groups in the collapse widget. Each array element represents a single
     * group with the following structure:
     *
     * ```php
     * // item key is the actual group header
     * 'Collapsible Group Item #1' => [
     *     // required, the content (HTML) of the group
     *     'content' => 'Anim pariatur cliche...',
     *     // optional the HTML attributes of the content group
     *     'contentOptions' => [],
     *     // optional the HTML attributes of the group
     *     'options' => [],
     * ]
     * ```
     */
    public $items = [];
    
    
    public $box = false;
    
    public $header = true;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, ($this->box) ? 'box-group' : 'panel-group');
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::beginTag('div', $this->options) . "\n";
        echo $this->renderItems() . "\n";
        echo Html::endTag('div') . "\n";
        $this->registerPlugin('collapse');
    }

    /**
     * Renders collapsible items as specified on [[items]].
     * @return string the rendering result
     */
    public function renderItems()
    {
        $items = [];
        $index = 0;
        foreach ($this->items as $header => $item) {
            $options = ArrayHelper::getValue($item, 'options', []);            
            Html::addCssClass($options, ($this->box) ? 'panel box' : 'panel' );
            $items[] = Html::tag('div', $this->renderItem($header, $item, ++$index), $options);
        }

        return implode("\n", $items);
    }

    /**
     * Renders a single collapsible item group
     * @param string $header a label of the item group [[items]]
     * @param array $item a single item from [[items]]
     * @param integer $index the item index as each item group content must have an id
     * @return string the rendering result
     * @throws InvalidConfigException
     */
    public function renderItem($header, $item, $index)
    {
        if (isset($item['content'])) {            
            $options = ArrayHelper::getValue($item, 'contentOptions', []);
            
            if($this->header){
                $id = $this->options['id'] . '-collapse' . $index;
                $options['id'] = $id;
            }else if(!isset($options['id'])){
                throw new InvalidConfigException('ContentOptions "id" need to be specify.');
            }
            
            Html::addCssClass($options, 'panel-collapse collapse');

            if($this->header){
				$headerToggle = Html::a($header, '#' . $id, [
                    'class' => 'collapse-toggle',
                    'data-toggle' => 'collapse',
                    'data-parent' => '#' . $this->options['id']
                ]) . "\n";
                $header = Html::tag('h4', $headerToggle, ['class' => ($this->box) ? 'box-title' : 'panel-title']);
            }
            $content = Html::tag('div', $item['content'], ['class' => ($this->box) ? 'box-body' : 'panel-body']) . "\n";
        } else {
            throw new InvalidConfigException('The "content" option is required.');
        }
        $group = [];
        if($this->header){
            $group[] = Html::tag('div', $header, ['class' => ($this->box) ? 'box-header' : 'panel-heading']);
        }
        $group[] = Html::tag('div', $content, $options);

        return implode("\n", $group);
    }
}
