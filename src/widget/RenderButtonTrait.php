<?php

/* 
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @project AdminUi
 * @projecturl https://github.com/mithun12000/adminUI
 * @country India
 */
namespace yii\adminUi\widget;
use yii,
 yii\helpers\ArrayHelper,
 yii\helpers\Html;
/**
 * renders a Bootstrap Buttons component.
 *
 * @see http://getbootstrap.com/css/#grid
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */
trait RenderButtonTrait{
    /**
     * Renders the toggle button.
     * @return string the rendering result
     */
    protected function renderToggleButton()
    {
        if ($this->toggleButton !== null) {
            $tag = ArrayHelper::remove($this->toggleButton, 'tag', 'button');
            $label = ArrayHelper::remove($this->toggleButton, 'label', 'Show');
            if ($tag === 'button' && !isset($this->toggleButton['type'])) {
                $this->toggleButton['type'] = 'button';
            }

            return Html::tag($tag, $label, $this->toggleButton);
        } else {
            return null;
        }
    }

    /**
     * Renders the close button.
     * @return string the rendering result
     */
    protected function renderCloseButton()
    {
        if ($this->closeButton !== null) {
            $tag = ArrayHelper::remove($this->closeButton, 'tag', 'button');
            $label = ArrayHelper::remove($this->closeButton, 'label', '&times;');
            if ($tag === 'button' && !isset($this->closeButton['type'])) {
                $this->closeButton['type'] = 'button';
            }

            return Html::tag($tag, $label, $this->closeButton);
        } else {
            return null;
        }
    }    
}