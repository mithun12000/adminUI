<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminUiMorrisChartAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $css = [        
        'css/morris/morris.css',
    ];
    
    public $js  = [
            '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
            'js/plugins/morris/morris.min.js',
    ];        
}