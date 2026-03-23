<?php

namespace src\controllers;
use src\services\Db;


class ArticlesController extends Controller
{
    public function index()
    {
        $db = new Db();
        $articles = $db->query("SELECT * FROM `articles`;");

        $this->view->renderHTML('aricles/main.php', 
        ['articles' => $articles, 
        'pageArticles' => $articles]);
    }

    public function view()
    {
        $db = new Db();
        $article = $db->query("SELECT * FROM `articles` WHERE id = :id;", [':id' => $id]);
        var_dump($article)

        $this->view->renderHTML('articles/index.php', 
        ['articles' => $articles, 
        'pageArticles' => $articles]);
    }

}