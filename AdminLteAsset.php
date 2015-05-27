<?php
/**
 * @link        http://hiqdev.com/yii2-asset-adminlte1
 * @license     BSD 3-clause
 * @copyright   Copyright (c) 2015 HiQDev
 */

namespace hiqdev\assets\adminlte1;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/hiqdev/yii2-asset-adminlte1/assets';

    public $css = [
        'css/morris/morris.css',
        'css/AdminLTE.css',
    ];

    public $js = [
        'js/AdminLTE/app.js',
    ];

}
