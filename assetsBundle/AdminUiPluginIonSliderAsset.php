<?php
/* 
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @project AdminUi
 * @projecturl https://github.com/mithun12000/adminUI
 * @country India
 */
namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;
/**
 * Asset bundle for the Twitter bootstrap Slider javascript files.
 *
 * @see http://getbootstrap.com/css/#grid
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */

class AdminUiPluginIonSliderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $js = [
        'js/plugins/ionslider/ion.rangeSlider.min.js',
    ];
    public $css = [
                    'css/ionslider/ion.rangeSlider.css',
                    'css/ionslider/ion.rangeSlider.skinNice.css'
                    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\adminUi\assetsBundle\AdminUiAsset',
    ];
}