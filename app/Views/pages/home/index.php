<?= $render('header', ['activeMenu' => 'home']) ?>

<section class="container">
    <h2>Página Home</h2>

    <?php foreach ($produtos as $item => $value) : ?>
        <li><?= $item ?> - <?= $value ?></li>
    <?php endforeach; ?>

    

</section>


<?= $render('footer') ?>