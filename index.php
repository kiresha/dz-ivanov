<?php

$hour = date("H");

if (isset($_GET["theme"])) {
    $theme = $_GET["theme"];
} else {
    if ($hour >= 8 && $hour < 20) {
        $theme = "night.css";
    } else {
        $theme = "day.css";
    }
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="content/css/styles.css">
    <link href="content/fonts/Inter/Inter-VariableFont_opsz,wght.ttf" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $theme; ?>">
</head>
<body>


<div class="popup" id="popup">
  <button class="close" id="closeBtn">

  </button>
  <span class="badge-red">Акция</span>
  <h2>Найди друга — получи подарок!</h2>
  <p>Забери питомца из приюта и получи:</p>
  <ul>
<li>✅ Стартовый набор для питомца</li>
<li>✅ Скидка 20% на первый заказ</li>
<li>✅ Бесплатная консультация ветеринара</li>
  </ul>
  <button class="btn-black">Подробнее</button>
  <p class="small">только до 1 июня!</p>
</div>
<script src="content/js/index.js"></script>
<iframe src="navigation.php" id="nav"></iframe>

<div class="block" id="main">
  <div class="wrap">
    <div class="left">
      <h1>Твой новый друг<br><span>с доставкой на дом</span></h1>
      <p>Приют домашних животных подарит тебе нового друга всего в несколько кликов. Мы заботимся о каждом питомце и гарантируем их здоровье.</p>
      <button class="btn-red">Посмотреть друзей</button>
    </div>
    <div class="right">
      <div class="photo-box">
        <img src="content/foto/собака глвная индекс.jpg" alt="Собака">
      </div>
      <div class="stat">
        <div class="icon">
          💕
        </div>
        <div>
          <b>1200+</b>
          <span>Счастливых питомцев</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block" id="why">
  <div class="wrap">
    <h2 class="title">Почему выбирают<br>наших друзей</h2>
    <div class="cols3">
      <div class="item">
        <div class="icon-blue">
          🐾
        </div>
        <h3>Их много</h3>
        <p>Огромный выбор собак, кошек, птиц и других экзотических питомцев в нашем каталоге.</p>
      </div>
      <div class="item">
        <div class="icon-yellow">
          🩺
        </div>
        <h3>Они здоровы</h3>
        <p>Мы заботимся о каждом питомце, который живёт у нас. Регулярные осмотры и вакцинация.</p>
      </div>
      <div class="item">
        <div class="icon-pink">
         💕
        </div>
        <h3>Их любят</h3>
        <p>Мы окружаем любовью и вниманием наших друзей, пока они ждут своих новых хозяев.</p>
      </div>
    </div>
  </div>
</div>

<div class="block" id="catalog">
  <div class="wrap">
    <div class="head">
      <h2 class="title-big">Каталог животных</h2>
      <div class="arrows">
        <button>
          ←
        </button>
        <button>
          →
        </button>
      </div>
    </div>
    <div class="tags">
      <button class="active">Все</button>
      <button>Кошки</button>
      <button>Собаки</button>
      <button>Обезьяны</button>
      <button>Птицы</button>
    </div>
    <div class="cols4">
      <div class="card">
        <div class="img-wrap">
          <img src="content/foto/котик зеленый фон.jpg" alt="Кошка">
          <span class="age">7 месяцев</span>
          <button class="like">
            ❤️
          </button>
        </div>
        <div class="info">
          <h3>Вислоухая кошка</h3>
          <p>Прекрасная порода из домашних кошачьих хищников</p>
          <div class="meta"><span>Кошки</span><span>Дружелюбные</span></div>
          <button class="btn-pink">Узнать больше</button>
        </div>
      </div>
      <div class="card">
        <div class="img-wrap">
          <img src="content/foto/пушистый рыжий кот.jpg" alt="Кошка">
          <span class="age">5 месяцев</span>
          <button class="like">
           ❤️
          </button>
        </div>
        <div class="info">
          <h3>Вислоухая кошка</h3>
          <p>Прекрасная порода из домашних кошачьих хищников</p>
          <div class="meta"><span>Кошки</span><span>Дружелюбные</span></div>
          <button class="btn-yellow">Узнать больше</button>
        </div>
      </div>
      <div class="card">
        <div class="img-wrap">
          <img src="content/foto/котик индекс 3 фото.jpg" alt="Кошка">
          <span class="age">1 год</span>
          <button class="like">
           ❤️
          </button>
        </div>
        <div class="info">
          <h3>Вислоухая кошка</h3>
          <p>Прекрасная порода из домашних кошачьих хищников</p>
          <div class="meta"><span>Кошки</span><span>Новый резидент</span></div>
          <button class="btn-pink">Узнать больше</button>
        </div>
      </div>
      <div class="card">
        <div class="img-wrap">
          <img src="content/foto/котик 4 индекс.jpg" alt="Кошка">
          <span class="age">7 месяцев</span>
          <button class="like">
            ❤️
          </button>
        </div>
        <div class="info">
          <h3>Вислоухая кошка</h3>
          <p>Прекрасная порода из домашних кошачьих хищников</p>
          <div class="meta"><span>Кошки</span><span>Дружелюбные</span></div>
          <button class="btn-yellow">Узнать больше</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block gray" id="play">
  <div class="wrap">
    <h2 class="title-big">Мы любим поиграть</h2>
    <div class="gallery">
      <div class="big"><img src="content/foto/поиграть 1.jpg" alt="Кот"></div>
      <div class="big"><img src="content/foto/поиграть 2.jpg" alt="Попугай"></div>
      <div class="wide"><img src="content/foto/поиграть 4.jpg" alt="Собака"></div>
      <div><img src="content/foto/поиграть 3.jpg" alt="Макака уга буга"></div>
      <div><img src="content/foto/поиграть 5.jpg" alt="Птенцы"></div>
    </div>
  </div>
</div>

<div class="block" id="about">
  <div class="wrap">
    <div class="left">
      <h2 class="title-big">О питомнике Happy Pet</h2>
      <h3>Мы - команда мечтателей</h3>
      <p>Добро пожаловать на сайт питомника собак "Happy Pet". Наш питомник был основан в 1995 году Еленой и Вячеславом Сорокиными. Изначально в задачи "Happy Pet" входили только организация курсов дрессировки и охрана различных промышленных объектов при помощи служебных собак.</p>
      <p>На сегодняшний день в питомнике содержится более 1000 собак, в том числе натренированных по различным программам: караульная служба, поиск людей, патрульно-постовая служба, караван служба и собаки-поводыри.</p>
      <button class="btn-border">Наша история</button>
    </div>
    <div class="right">
      <div class="photo-wrap">
        <img src="content/foto/о питомнике.jpg" alt="Щенки">
        <div class="icon-yellow">
        🚀
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block" id="ask">
  <div class="wrap">
    <div class="form-box">
      <h2>Есть вопросы? Задавайте!</h2>
      <form>
        <div class="row">
          <input type="text" placeholder="Введите имя">
          <input type="email" placeholder="Введите E-mail">
        </div>
        <div class="row">
          <input type="tel" placeholder="Введите телефон">
          <select>
            <option>Тема вопроса</option>
            <option>Усыновление</option>
            <option>Партнерство</option>
            <option>Другое</option>
          </select>
        </div>
        <textarea placeholder="Введите ваше сообщение"></textarea>
        <label><input type="checkbox"> <span>Я принимаю согласие на обработку персональных данных</span></label>
        <label><input type="checkbox"> <span>Я принимаю Конфиденциальность</span></label>
        <button type="submit" class="submit">
          ➤
        </button>
      </form>
    </div>
  </div>
</div>

<footer>
  <div class="wrap">
    <div class="foot-top">
      <div class="brand">
        <div class="logo">
          <div class="icon-orange"><img src="content/foto/лого.png" width="23" height="23" alt=""></div>
          <span>Happy Pet</span>
        </div>
        <p>Мы создаем комфортные условия для жизни ваших питомцев. Профессиональный уход и забота в каждом создании.</p>
        <div class="socials">
          <a href="#">
        🅾
          </a>
          <a href="#">
            𝕏
          </a>
          <a href="#">
            𝐕
          </a>
        </div>
      </div>
      <div class="links">
        <h4>Навигация</h4>
        <ul>
          <li><a href="catalog.html">Каталог</a></li>
          <li><a href="#">Усыновление</a></li>
          <li><a href="#">Гарантия здоровья</a></li>
          <li><a href="#">Истории успеха</a></li>
        </ul>
      </div>
      <div class="contacts">
        <h4>Контакты</h4>
        <ul>
          <li>📞 +7 (800) 123-45-67</li>
<li>✉️ hello@happypet.ru</a></li>
<li>📍 г. Магнитогорск, ул. Звериная, 36</li>
        </ul>
      </div>
      <div class="sub">
        <h4>Рассылка</h4>
        <p>Получайте новости о новых питомцах и советы по уходу.</p>
        <input type="email" placeholder="Введите email">
        <button>Подписаться</button>
      </div>
    </div>
    <div class="foot-bottom">
      <p>&copy; 2026 Happy Pet. Все права защищены.</p>
      <div>
        <a href="#">Политика конфиденциальности</a>
        <a href="#">Оферта</a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>