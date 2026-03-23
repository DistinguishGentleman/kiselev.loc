<?php

namespace src\controllers;

use views\View;
use src\services\Db;

class MainController extends Controller
{
    public $view;
    public $layout = 'default';
    public function __construct()
    {
        $this->view = new View($this->layout);
    }
    public function main()
    {
        $db = new Db();
        $articles = $db->query("SELECT * FROM `articles`;");

        $this->view->renderHTML('main/main.php', 
        ['articles' => $articles, 
        'pageArticles' => $articles]);
    }

    public function sayHello($name)
    {
        echo 'Привет, ' . $name;
    }
}
