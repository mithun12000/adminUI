<?php

namespace yii\adminUi\assetsBundle;

use yii\web\AssetBundle;


class AdminUIMultiselect extends AssetBundle
{
    public $sourcePath = '@vendor/adminUi/assets/';
    public $css = [                
        'css/multiselect/jquery.asmselect.css',
    ];
    public $js  = [        
        'js/plugins/multiselect/jquery.asmselect.js',
    ];  
    public $depends = [
        'yii\adminUi\assetsBundle\AdminUiAsset',
        'yii\adminUi\assetsBundle\JqueryUI',        
    ];
}
?>
