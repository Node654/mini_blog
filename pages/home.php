<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мини-Блог</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f0f0f0;
    }
    a {
        text-decoration: none;
        color: #007bff;
    }
    a:hover {
        text-decoration: underline;
    }
    button {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
    button:hover {
        background-color: #d32f2f;
    }
</style>
<header>
    <div class="container">
        <h1>Мини-Блог</h1>
    </div>
</header>

<nav>
    <div class="container">
        <a href="/">Главная</a>
        <a href="/addArticle">Добавить пост</a>
    </div>
</nav>

<div class="container">
    <article>
        <table>
            <tr>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($blogs as $value) { ?>
                <tr>
                    <td><a href="/articles/<?= urlencode($value['id']) ?>"><?= htmlspecialchars($value['title']) ?></a></td>
                    <td><a href="/edit/<?= urlencode($value['id']) ?>">Edit</a></td>
                    <td>
                        <form action="/delete" method="post">
                            <input type="hidden" name="id" value="<?= urlencode($value['id']) ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </article>
</div>

<footer>
    <div class="container">
        © 2024 Мини-Блог
    </div>
</footer>
</body>
</html>

