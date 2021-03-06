<?php

namespace miradnan\assets;

use Yii;
use yii\web\AssetBundle AS YiiAssetBundle;

/**
 * Description of AssetBundle
 *
 * @author miradnan
 */
class AssetBundle extends YiiAssetBundle {

    public static function register($view) {
        $assetClass = '\\' . get_called_class();

        if (!class_exists($assetClass)) {
        $file = dirname(Yii::$app->basePath) . str_replace('\\', '/', $assetClass) . '.php';
        pr($file);
        }

        $asset = new $assetClass;
        pr($asset->js);
    }

}
