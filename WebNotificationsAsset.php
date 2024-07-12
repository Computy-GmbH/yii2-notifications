<?php

namespace computy\notifications;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class NotificationsAsset
 *
 * @package computy\notifications
 */
class WebNotificationsAsset extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_END];

    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__.'/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/web-notifications.js',
    ];

}
