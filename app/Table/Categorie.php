<?php

namespace App\Table;
use App\App;
class Categorie extends Table {
    public $id;
    public $titre;

    protected static $table = "categories";
    public function getUrl(){
        return 'index.php?p=categorie&id=' . $this->id;
    }
}