<?= $render('header') ?>

<h2>Página Sobre</h2>

<?php foreach ($data as $item => $value) : ?>
    <li><?= $item ?> - <?= $value ?></li>
<?php endforeach; ?>


<?= $render('footer') ?>