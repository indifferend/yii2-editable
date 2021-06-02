<?php

namespace indifferend\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableComboDateAsset
 *
 * @package indifferend\editable\bundles
 */
class EditableComboDateAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/indifferend/yii2-editable/assets/combodate';

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
        'indifferend\editable\bundles\EditableBootstrapAsset',
    ];
}
