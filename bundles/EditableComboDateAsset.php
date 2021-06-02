<?php

namespace indifferentmoviegoer\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableComboDateAsset
 *
 * @package indifferentmoviegoer\editable\bundles
 */
class EditableComboDateAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/indifferentmoviegoer/yii2-editable/assets/combodate';

    /**
     * @var array
     */
    public $js = [
        'vendor/moment-with-langs.min.js',
        'vendor/combodate.js',
        'bootstrap-editable-combodate.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'indifferentmoviegoer\editable\bundles\EditableBootstrapAsset',
    ];
}
