<?php

/**
 * Animo Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://labs.bigroomstudios.com/libraries/animo-js
 */

namespace xj\animo;

use yii\web\AssetBundle;

class AnimoAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-animo-widget/assets';
    public $basePath = '@webroot/assets';
    public $css = ['animate+animo.css'];
    public $js = ['animo.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
