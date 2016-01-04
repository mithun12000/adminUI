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
class JqueryUI extends AssetBundle
{
    public $sourcePath = '@vendor/bower/jquery-ui/';
    //public $baseUrl = '@web';
    
    public $css = [
        'themes/sunny/jquery-ui.css'
    ];
    
    
    public $js  = [
        'jquery-ui.min.js'
    ];      
        
    public $depends = [
            'yii\web\JqueryAsset',
    ];        
}