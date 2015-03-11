<?php

namespace alladas\yii2newssticker;

use Yii;
use yii\web\AssetBundle;

/**
 * Asset bundle for News Sticker
 */
class NewsStickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/alladas/yii2-news-sticker';
	
    public $js = [
        'js/jquery.bootstrap.newsbox.min.js'
    ];
    
    public $css = [
        'css/newssticker.css'
    ];
}
