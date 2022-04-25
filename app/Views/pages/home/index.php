<?= $render('header') ?>

<h2>Página Home.</h2>

<?php foreach ($dados as $item => $value) : ?>
    <li><?= $item ?> - <?= $value ?></li>
<?php endforeach; ?>

<?= $render('footer') ?>