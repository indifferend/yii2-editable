<?php

namespace indifferend\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableBootstrapAsset
 *
 * @package indifferend\editable\bundles
 */
class EditableBootstrapAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/x-editable/dist/bootstrap-editable';

    /**
     * @var array
     */
    public $css = [
        'css/bootstrap-editable.css',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * Init object
     */
    public function init()
    {
        $this->js[] = '/js/main/editable.min.js';
    }
}
