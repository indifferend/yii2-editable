<?php

namespace indifferend\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableAddressAsset
 *
 * @package indifferend\editable\bundles
 */
class EditableAddressAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/indifferend/yii2-editable/assets/address';

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
        'indifferend\editable\bundles\EditableBootstrapAsset',
    ];
}
