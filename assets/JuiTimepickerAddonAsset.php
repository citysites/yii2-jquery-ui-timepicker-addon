<?php

namespace citysites\assets;

use yii\jui\JuiAsset;
use yii\web\AssetBundle;

class JuiTimepickerAddonAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@vendor/npm-asset/jquery-ui-timepicker-addon';
    /**
     * {@inheritDoc}
     */

    public $css = [
        'src/jquery-ui-timepicker-addon.min.css'
    ];

    /**
     * {@inheritDoc}
     */
    public $js = [
        'src/jquery-ui-timepicker-addon.min.js',
        'dist/i18n/jquery-ui-timepicker-addon-i18n.min.js'
    ];

    /**
     * {@inheritDoc}
     */
    public $depends = [
        JuiAsset::class
    ];
}
