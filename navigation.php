<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Навигация</title>
    <link rel="stylesheet" href="content/css/navigation.css">
    <link href="content/fonts/Inter/Inter-VariableFont_opsz,wght.ttf" rel="stylesheet">
</head>

<body>

    <header class="header">
        <div class="wrap">

            <div class="left">
                <a href="index.php" class="logo">
                    <div class="logo-icon">
                        <img src="content/foto/лого.png" alt="logo">
                    </div>
                    <span>Happy Pet</span>
                </a>

                <nav class="nav">
                    <a href="index.php" target="_parent" class="nav-link">Главная</a>
                    <a href="catalog.php" target="_parent" class="nav-link">Каталог</a>
                    <a href="about.php" target="_parent" class="nav-link">О нас</a>
                    <a href="contacts.php" target="_parent" class="nav-link">Контакты</a>
                    <a href="reviews.php" target="_parent" class="nav-link">Обзоры</a>


                </nav>
            </div>

            <div class="right">
                <div class="search">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4-4"></path>
                    </svg>
                    <input type="text" placeholder="Поиск...">
                </div>

                <a href="login.php" target="_parent" class="auth">
                    <span>Вход / Регистрация</span>
                    <div class="avatar">
                        👤
                    </div>
                </a>
            </div>

        </div>
    </header>

</body>

</html>