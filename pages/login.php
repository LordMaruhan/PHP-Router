<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>

    <!-- Подключаем стили -->
    <link rel="stylesheet" href="/styles/login.css">
</head>

<body>

<div class="login-wrapper">
    <div class="login-card">
        <h1 class="title">Вхід</h1>

        <form id="loginForm">
            <input type="text" id="user" placeholder="Имя пользователя" required>
            <input type="password" id="pass" placeholder="Пароль" required>

            <button type="submit" class="btn">Увійти</button>
        </form>

        <div class="links">
            <a href="#" class="link">Забыли пароль?</a>
        </div>
    </div>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function (e) {
        e.preventDefault();
        window.location.href = "/pages/home.php";
    });
</script>

</body>
</html>