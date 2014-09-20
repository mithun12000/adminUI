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
class AdminUiInputMaskAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.inputmask/dist';    
    
    public $js  = [
            'jquery.inputmask.bundle.js',
    ];
    
    public $depends = [
            'yii\adminUi\assetsBundle\AdminUiAsset',
    ];
}