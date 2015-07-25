<?php
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/th/assets');
$this->registerJsFile($directoryAsset.'/js/cbpAnimatedHeader.min.js');
?>

<?php $this->beginContent('@frontend/views/layouts/_base.php')?>

<?= $this->render('_header.php') ?>

<?= $content ?>

<?= $this->render('_footer.php') ?>

<?php $this->endContent(); ?>
