<?php

namespace indifferentmoviegoer\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableAddressAsset
 *
 * @package indifferentmoviegoer\editable\bundles
 */
class EditableAddressAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/indifferentmoviegoer/yii2-editable/assets/address';

    /**
     * @var array
     */
    public $css = [
        'bootstrap-editable-address.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'bootstrap-editable-address.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'indifferentmoviegoer\editable\bundles\EditableBootstrapAsset',
    ];
}
