<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo Leveling: Arise</title>

    <!-- Шрифты и стили -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Головна</title>


    <style>
        .character-info {
    text-align: center;
    margin-top: 10px;
    font-size: 18px;
    color: #fff;
    text-shadow: 0 0 8px #a200ff;
}
        .characters-grid {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .character-card {
            width: 230px;
            padding: 12px;
            background: rgba(15, 15, 25, 0.8);
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(140, 0, 255, 0.7);
            transition: 0.4s;
            backdrop-filter: blur(8px);
        }

        .character-card:hover {
            transform: scale(1.08) rotateY(7deg);
            box-shadow: 0 0 25px rgba(185, 0, 255, 1);
        }

        .character-card img {
            width: 100%;
            border-radius: 10px;
        }
        .mal{
            display: inline-block;
            background-color: rgb(51, 0, 54);
            color: black;
            padding: 100px 150px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .play-market-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 10px;
            background: linear-gradient(135deg, #00ff80, #00cc66);
            color: black;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 0 12px #00ff88;
            transition: 0.3s;
        }
        .play-market-button:hover {
            transform: scale(1.06);
            box-shadow: 0 0 20px #00ffaa;
        }

        .appstore-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 10px;
            background: linear-gradient(135deg, #ffffff, #a7f1ff);
            color: #000;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 0 12px #7fe8ff;
            transition: 0.3s;
        }
        .appstore-button:hover {
            transform: scale(1.06);
            box-shadow: 0 0 22px #aef4ff;
        }

        .steam-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 10px;
            background: linear-gradient(135deg, #00e9ff, #00b7ff);
            color: black;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 0 12px #00eaff;
            transition: 0.3s;
        }
        .steam-button:hover {
            transform: scale(1.06);
            box-shadow: 0 0 22px #39f3ff;        
        }

        .trailer-button {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff004c, #ff007b);
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 0 12px #ff2a78;
            transition: 0.3s;;
        }
        .trailer-button:hover {
            transform: scale(1.08);
            box-shadow: 0 0 22px #ff4c98;
        }
        .register-button{
            font-size: 16px;
            background-color: blueviolet;
        }
    </style>
</head>

<body>
    <body>

        <section>
            <h1>Головна сторінка</h1>
            <a href="/pages/login.php?page=login" class="login-button">Перейти до Логіну</a>
        </section>
        
        <header>
            <h1>Solo Leveling: Arise</h1>
            <nav>
                <ul>
                    <li><a href="#about">О игре</a></li>
                    <li><a href="#characters">Персонажи</a></li>
                    <li><a href="#download">Скачать</a></li>
                    <li><a href="#trailer">Трейлер</a></li>
                </ul>
            </nav>
        </header>
        
        <section class="hero">
            <div class="overlay">
                <h2>Стань сильнейшим охотником!</h2>
                <p>Открой силу Джина У и пройди путь восхождения.</p>
                <a href="#download" class="btn">Играть</a>
            </div>
        </section>
        
        <section id="about">
            <h2>О игре</h2>
            <p>Solo Leveling: Arise — динамичная экшен-RPG...</p>
        </section>
        
        <section id="characters">
    <h2>Персонажи</h2>

    <div class="characters-grid">
        <div class="character-card">
            <img src="/mal/son.jpg" alt="Сон Джин Ву">
            <div class="character-info">Сон Джин Ву</div>
        </div>

        <div class="character-card">
            <img src="/mal/hein.jpg" alt="Чха Хэг Ин">
            <div class="character-info">Чха Хэг Ин</div>
        </div>

        <div class="character-card">
            <img src="/mal/Beak.jpg" alt="Бэк Юн Хо">
            <div class="character-info">Бэк Юн Хо</div>
            
        </div>
    </div>
</section>

        
        <section id="trailer">
            <h2>Трейлер игры</h2>
            <a class="trailer-button" href="https://www.youtube.com/watch?v=z8HAzlv61uc" target="_blank">Смотреть трейлер</a>
        </section>
        
        <section id="download">
            <h2>Скачать</h2>
            <a class="play-market-button" href="https://play.google.com/store/apps/details?id=com.netmarble.sololv" target="_blank">Play Market</a>
            <a class="appstore-button" href="https://apps.apple.com/app/id6475981443" target="_blank">App Store</a>
            <a class="steam-button" href="https://store.steampowered.com/app/2373990/Solo_LevelingARISE/" target="_blank">Steam</a>
        </section>
        
    </body>
</html>