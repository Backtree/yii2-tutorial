
<?php $this->beginContent('@th/views/layouts/_base.php'); ?>

<?= $this->render('_header.php') ?>

<?= $content ?>

<?= $this->render('_footer.php') ?>

<?php $this->endContent(); ?>
