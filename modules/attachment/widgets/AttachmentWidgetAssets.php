<?php

namespace app\modules\attachment\widgets;

use yii\web\AssetBundle;

class AttachmentWidgetAssets extends AssetBundle
{
    public $publishOptions = ['forceCopy' => true];

    //@attachment alias set in config
    public $sourcePath = '@attachment';

    public $js = [
        'js/vue.min.js',
        'js/attachment.js',

    ];

    public $css = [
        'css/attachment.css'
    ];

    public function init()
    {
        parent::init();
    }
}