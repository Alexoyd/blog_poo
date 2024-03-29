<?php

namespace App\Table;

use App\App;

class Article extends Table
{
    private $id;

    public $contenu;
    public $titre;
    private $date;
    protected $url; // Déclaration de la propriété url
    protected $extrait; // Déclaration de la propriété extrait
    public $categorie;

    public static function find($id)
    {
        return self::query("
            SELECT articles.id,articles.titre,articles.contenu,categories.titre as categorie 
            FROM articles 
            LEFT JOIN categories ON category_id = categories.id
            WHERE articles.id = ?
            ", [$id], true);
    }
    public static function getLast()
    {
        return self::query("
        SELECT articles.id,articles.titre,articles.contenu,categories.titre as categorie 
        FROM articles 
        LEFT JOIN categories ON category_id = categories.id
        ");
    }

    public static function lastByCategory($category_id)
    {
        return self::query("
        SELECT articles.id,articles.titre,articles.contenu,categories.titre as categorie 
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id
        WHERE category_id = ?", [$category_id]);
    }

    public function getUrl()
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>'; //substr découpe la chaine (n'affiche que les 100 premiers caratères)
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>'; // .= sert à concaténer les chaines (donc $html + le contenu après le = )
        return $html;
    }
}