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
class AdminUiJVectorMapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $css = [                
        'css/jvectormap/jquery-jvectormap-1.2.2.css',
    ];
    
    public $js  = [
            'js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
            'js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    ];        
}