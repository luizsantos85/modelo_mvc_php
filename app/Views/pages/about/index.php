<?= $render('header', ['activeMenu' => 'about']) ?>

<section class="container">
    <h2>Página Sobre</h2>

    <div class="row my-4">
        <?php foreach ($data as $info) : ?>
            <h3><?= $info['titulo'] ?></h3>
            <p><?= $info['descricao'] ?></p>
        <?php endforeach; ?>
    </div>

</section>


<?= $render('footer') ?>