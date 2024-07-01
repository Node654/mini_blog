<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница для ввода</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            height: 150px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Введите информацию</h1>
    <form action="/articles/update" method="post">
        <input type="hidden" name="id" value="<?= $blog['id'] ?>">
        <div class="form-group">
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" required value="<?= $blog['title'] ?? ''; ?>">
        </div>
        <div class="form-group">
            <label for="content">Содержание:</label>
            <textarea id="content" name="content" required><?= $blog['content'] ?? ''; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Обновить</button>
        </div>
    </form>
</div>
</body>
</html>
