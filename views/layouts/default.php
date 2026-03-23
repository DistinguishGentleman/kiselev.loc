<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Мой Блог</title>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    body {
        flex: 1;
    }

    header {
        background-color: #ffb013;
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    header h1 {
        margin: 0;
        font-size: 24px;
    }

    nav {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #e3110e;
    }

    main {
        flex: 1; 
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }

    section#blog {
        margin-top: 40px;
    }

    .post {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: box-shadow 0.3s;
    }

    .post:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .post h3 {
        margin-top: 0;
        color: #333;
    }

    .meta {
        font-size: 0.9em;
        color: #555;
        margin-bottom: 10px;
    }

    footer {
        background-color: #3d3d3d;
        color: white;
        text-align: center;
        padding: 15px 20px;
        margin-top: auto; 
        box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
    }

</style>
</head>
<body>

<header>
    <h1>Мой Блог</h1>
    <nav>
        <a href="#home">Главная</a>
        <a href="#about">О нас</a>
        <a href="#blog">Блог</a>
        <a href="#contact">Контакты</a>
    </nav>
</header>

<main>
    <h1>Статьи</h1>
    <?php foreach($articles as $article): ?>
        <h2><?= $article['name'] ?></h2>
        <p><?= $article['text'] ?></p>
        <hr>
    <?php endforeach; ?>
</main>

<footer>
    <p>© 2024 Мой Блог | Связаться: info@myblog.ru</p>
</footer>

</body>
</html>