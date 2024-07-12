<?php

namespace computy\notifications;

use yii\web\AssetBundle;

/**
 * Class NotificationsAsset
 *
 * @package computy\notifications
 */
class NotificationsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__.'/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/notifications.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/notifications.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];

}
