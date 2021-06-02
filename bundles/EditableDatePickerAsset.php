<?php

namespace indifferend\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableDatePickerAsset
 *
 * @package indifferend\editable\bundles
 */
class EditableDatePickerAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/indifferend/yii2-editable/assets/datepicker';

    /**
     * @var array
     */
    public $css = [
        'vendor/css/datepicker3.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'vendor/js/bootstrap-datepicker.js',
        'bootstrap-editable-datepicker.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'indifferend\editable\bundles\EditableBootstrapAsset',
    ];
}
