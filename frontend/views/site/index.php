   <?php

    Yii::$app->layout='main';

   $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@web');
   ?>
   <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><?= Yii::t('frontend', 'Tutorkrutik')?></div>
                <div class="intro-heading">Yii FrameWork 2.0</div>

              <!-- <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a> -->
            </div>
        </div>
    </header>


    <?= $this->render('_portfolio.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?= $this->render('_about.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?= $this->render('_team.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?= $this->render('_client.php',['directoryAsset'=>$directoryAsset ]) ?>
    <?= $this->render('_contact.php',['directoryAsset'=>$directoryAsset ]) ?>
