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
class AdminUiAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $baseUrl = '@web';
    public $css = [
        'css/AdminLTE.css',
    ];
    
    public $js  = [            
            //'js/jquery-ui-1.10.3.min.js',
            'js/AdminLTE/app.js'
    ];      
        
    public $depends = [
            'yii\web\JqueryAsset',
            'yii\bootstrap\BootstrapAsset',
            'yii\bootstrap\BootstrapPluginAsset',
            'yii\adminUi\assetsBundle\AdminUiHeadAsset',
            'yii\adminUi\assetsBundle\FontAwesomeAsset',
            'yii\adminUi\assetsBundle\FontIoniconsAsset',
    ];        
}