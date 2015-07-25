<?php
$this->beginContent('@frontend/views/layouts/_base.php');

?>

<?= $this->render('_header.php',['class'=>'navbar-shrink']) ?>

 <section class="pages" >
        <div class="container">
           <?= $content ?>
        </div>
</section>


<?= $this->render('_footer.php') ?>

<?php $this->endContent(); ?>
