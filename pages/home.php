<div class="row">
    <div class="col-sm-8">
        <?php foreach(\App\Table\Article::getLast() as $post): ?>
            <h2>
                <?php
                var_dump($post);
                ?>
                <a href="<?= $post->url ?>"><?= $post->titre; ?></a>
            </h2>
            <p><em><?=$post->categorie;?></em></p>
            <p>
                <?= $post->extrait; ?>
            </p>
        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach(\App\table\Categorie::all() as $categorie): ?>
            <li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
            <?php   endforeach; ?>
        </ul>
    </div>
</div>