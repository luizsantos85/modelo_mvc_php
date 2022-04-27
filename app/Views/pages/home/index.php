<?= $render('header', ['activeMenu' => 'home']) ?>

<section class="container">
    <h2>Página Home</h2>

    <div class="row my-4">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Preço</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($produtos as $item => $produto) : ?>
                    <tr>
                        <td><?= $produto['id'] ?></td>
                        <td><?= $produto['descricao'] ?></td>
                        <td>R$ <?= $produto['preco'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</section>


<?= $render('footer') ?>