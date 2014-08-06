<?php

/**
 * Animo Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://labs.bigroomstudios.com/libraries/animo-js
 */

namespace xj\animo;

use yii\web\AssetBundle;

class AnimoAsset extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = ['animate+animo.css'];
    public $js = [];
    public $depends = ['yii\web\JqueryAsset'];

    private function getJs() {
        return [
            YII_DEBUG ? 'animo.js' : 'animo.min.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
