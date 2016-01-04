<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;
use yii\web\View as View;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminUiHeadAsset extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
	
    public $js  = [
            '//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
            '//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js',
    ];	
        
    public $jsOptions = [
            'condition'=> 'lt IE 9',
            'position'=> View::POS_HEAD,
    ];
}