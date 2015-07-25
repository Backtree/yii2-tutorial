<?php
namespace frontend\themes\th;

use yii\web\AssetBundle;

class AgencyAsset extends AssetBundle
{
    //public $basePath = '@app/themes/agecents';
    //public $baseUrl = '@web/themes/agecents';
  public $sourcePath = '@frontend/themes/th/assets';
    public $css = [

        'css/agency.css',
        

    ];

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/jquery-scrollspy.js',
        //'js/cbpAnimatedHeader.min.js',
        'js/classie.js',
        //'js/contact_me.js',
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
