<!-- Navigation -->
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;

$class = !isset($class) ? '' : $class;
if (Yii::$app->layout == 'homepage') {
    $menus = [
        ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
        // ['label' => Yii::t('frontend', 'Service'), 'url' =>'services','linkOptions'=>['class'=>'page-scroll']],
        ['label' => Yii::t('frontend', 'Portfolio'), 'url' => '#portfolio', 'linkOptions' => ['class' => 'page-scroll']],
        ['label' => Yii::t('frontend', 'About'), 'url' => '#about', 'linkOptions' => ['class' => 'page-scroll']],
        ['label' => 'Team', 'url' => '#team', 'linkOptions' => ['class' => 'page-scroll']],
        ['label' => 'Contact', 'url' => '#contact', 'linkOptions' => ['class' => 'page-scroll']],
    ];
} else {
    $menus = [
        ['label' => Yii::t('frontend','Home'), 'url' => ['/site/index']],
        
        ['label' => Yii::t('frontend','Portfolio'), 'url' => ['index', '#' => 'portfolio'], 'linkOptions' => ['class' => 'page-scroll']],
        ['label' => Yii::t('frontend','About'), 'url' => ['index', '#' => 'about'], 'linkOptions' => ['class' => 'page-scroll']],
        ['label' => 'Team', 'url' => ['index', '#' => 'team'], 'linkOptions' => ['class' => 'page-scroll']],
        ['label' => 'Contact', 'url' => ['index', '#' => 'contact'], 'linkOptions' => ['class' => 'page-scroll']],
    ];
}
?>

<?php
$options = ['navbar', 'navbar-default', 'navbar-fixed-top'];
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'brandOptions' => [
        'class' => 'navbar-header page-scroll'
    ],
    'options' => [
        'class' => 'navbar navbar-default navbar-fixed-top ' . $class,
    ],
]);

?>
  <?php echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
          
            ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
            ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
            [
                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                'visible'=>!Yii::$app->user->isGuest,
                'items'=>[
                    [
                        'label' => Yii::t('frontend', 'Settings'),
                        'url' => ['/user/default/index']
                    ],
                    [
                        'label' => Yii::t('frontend', 'Backend'),
                        'url' => Yii::getAlias('@backendUrl'),
                        'visible'=>Yii::$app->user->can('manager')
                    ],
                    [
                        'label' => Yii::t('frontend', 'Logout'),
                        'url' => ['/user/sign-in/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ]
                ]
            ],
            [
                'label'=>Yii::t('frontend', 'Language'),
                'items'=>array_map(function ($code) {
                    return [
                        'label' => Yii::$app->params['availableLocales'][$code],
                        'url' => ['/site/set-locale', 'locale'=>$code],
                        'active' => Yii::$app->language === $code
                    ];
                }, array_keys(Yii::$app->params['availableLocales']))
            ]
        ]
    ]); ?>
    <?php NavBar::end(); ?>

