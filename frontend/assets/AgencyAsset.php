<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class AgencyAsset extends AssetBundle
{
     public $basePath = '@webroot';
    public $baseUrl = '@web';
  //public $sourcePath = '@frontend/themes/th/assets';
    public $css = [

        'css/agency.css',
        'css/th.css',

    ];

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/jquery-scrollspy.js',
        //'js/cbpAnimatedHeader.min.js',
        'js/classie.js',
        'js/contact_me.js',
        'js/jqBootstrapValidation.js',
        'js/agency.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        //'th\assets\FontAwesomeAsset'
    ];
}
