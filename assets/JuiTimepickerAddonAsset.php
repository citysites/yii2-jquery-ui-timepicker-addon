<?php

namespace citysites\assets;

use yii\jui\JuiAsset;
use yii\web\AssetBundle;

class JuiTimepickerAddonAsset extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@vendor/npm-asset/jquery-ui-timepicker-addon/dist';

    /**
     * {@inheritDoc}
     */
    public $css = [
        'jquery-ui-timepicker-addon.min.css'
    ];

    /**
     * {@inheritDoc}
     */
    public $js = [
        'jquery-ui-timepicker-addon.min.js',
        'i18n/jquery-ui-timepicker-addon-i18n.min.js'
    ];

    /**
     * {@inheritDoc}
     */
    public $depends = [
        JuiAsset::class
    ];
}
