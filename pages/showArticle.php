<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Статья</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .article-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .article-title {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
        .article-content {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
<div class="article-container">
    <h1 class="article-title"><?= $blog['title']; ?></h1>
    <div class="article-content">
        <p><?= $blog['content']; ?></p>
    </div>
    <a href="/">Вернуться на главную!</a>
    <h3>Время добавления: <?= $blog['created_at']; ?></h3>
</div>
</body>
</html>