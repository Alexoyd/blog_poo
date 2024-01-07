<?php
use App\App;
use App\table\Categorie;
use App\Table\Article;

$post = Article::find([$_GET['id']]);
if($post === false){
    APp::notFound();
}


?>
<h1><?= $post->titre; ?></h1>

<p><em><?= $post->categorie;?></em></p>
<p><?= $post->contenu;?></p>