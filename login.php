<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход и Регистрация — Happy Pet</title>
    <link rel="stylesheet" href="content/css/login.css">
    <link href="content/fonts/Inter/Inter-VariableFont_opsz,wght.ttf" rel="stylesheet">

</head>

<body>

    <!-- Верхняя панель навигации -->
    <iframe src="navigation.php" class="nav-bar"></iframe>

    <main class="login-page">
        <div class="login-box">
            <!-- Контентная часть с формами -->
            <div class="forms-side">
                <div class="tabs">
                    <button class="tab-btn active" data-tab="login">Вход</button>
                    <button class="tab-btn" data-tab="register">Регистрация</button>
                </div>

                <!-- Форма входа -->
                <form class="auth-form" id="loginForm">
                    <div class="input-block">
                        <label>Email</label>
                        <input type="email" placeholder="example@mail.com" required>
                    </div>

                    <div class="input-block">
                        <label>Пароль</label>
                        <div class="pass-wrapper">
                            <input type="password" placeholder="Введите пароль" required>
                            <button type="button" class="view-pass">
                                👁
                            </button>
                        </div>
                    </div>

                    <div class="form-row">
                        <label class="check-container">
                            <input type="checkbox">
                            <span class="mark"></span>
                            <span class="text">Запомнить меня</span>
                        </label>
                        <a href="#" class="link">Забыли пароль?</a>
                    </div>

                    <button type="submit" class="btn btn-main">Войти</button>

                    <div class="divider"><span>или</span></div>

                    <div class="socials">
                        <button type="button" class="soc-btn">Google</button>
                        <button type="button" class="soc-btn vk">VK</button>
                    </div>
                </form>

                <!-- Форма регистрации -->
                <form class="auth-form hidden" id="registerForm">
                    <div class="input-block">
                        <label>Ваше имя</label>
                        <input type="text" placeholder="Александр Иванов" required>
                    </div>

                    <div class="input-block">
                        <label>Email</label>
                        <input type="email" placeholder="example@mail.com" required>
                    </div>

                    <div class="input-block">
                        <label>Телефон</label>
                        <input type="tel" placeholder="+7 (___) __-__-__">
                    </div>

                    <div class="input-block">
                        <label>Пароль</label>
                        <input type="password" placeholder="Минимум 8 символов" required>
                    </div>

                    <div class="input-block">
                        <label>Подтвердите пароль</label>
                        <input type="password" placeholder="Повторите пароль" required>
                    </div>

                    <label class="check-container">
                        <input type="checkbox" required>
                        <span class="mark"></span>
                        <span class="text">Я согласен на обработку персональных данных</span>
                    </label>

                    <button type="submit" class="btn btn-main">Зарегистрироваться</button>
                </form>
            </div>

            <!-- собакен справа -->
            <div class="image-side">
                <img src="content/foto/поиграть 4.jpg" alt="Pet">
                <div class="image-text">
                    <h2>Найдите своего<br>идеального друга</h2>
                    <p>Присоединяйтесь к Happy Pet и откройте для себя мир заботы о животных</p>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="content/js/login.js"></script>

</html>