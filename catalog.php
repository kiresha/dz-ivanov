<?php
$hour = (int)date('H');
$isNight = true;
?>


<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Каталог питомцев</title>
<link rel="stylesheet" href="content/css/catalog.css">
<link href="content/fonts/Inter/Inter-VariableFont_opsz,wght.ttf" rel="stylesheet">
    <?php if ($isNight): ?>
        <link rel="stylesheet" href="content/css/night.css">
    <?php endif; ?>
</head>
<body>

<iframe src="navigation.html" id="nav"></iframe>

<div class="block hero" id="top">
  <div class="wrap">
    <div class="left">
      <span class="badge">Питомец недели</span>
      <h1>Познакомьтесь с <span>Марли</span></h1>
      <p>Невероятно ласковый золотистый ретривер, который обожает долгие прогулки в парке и обнимашки. Марли станет верным другом для большой семьи.</p>
      <div class="btns">
        <button class="btn-red">Узнать историю</button>
        <a href="#" class="btn-border">Смотреть видео</a>
      </div>
      <div class="stats">
        <div>
          <span>ВОЗРАСТ</span>
          <b>2.5 года</b>
        </div>
        <div>
          <span>ЗДОРОВЬЕ</span>
          <b>Отличное</b>
        </div>
        <div>
          <span>ХАРАКТЕР</span>
          <b>Добрый</b>
        </div>
      </div>
    </div>
    <div class="right">
      <img src="content/foto/каталог гл.jpg" alt="Марли">
    </div>
  </div>
</div>

<div class="block" id="catalog">
  <div class="wrap">
    <aside class="sidebar">
      <div class="side-head">
        <h3>
          ⚙️
          Фильтры
        </h3>
        <a href="#">Сбросить</a>
      </div>
      <div class="group">
        <div class="group-title">
          <span>Тип животного</span>
          ▼
        </div>
        <div class="group-body">
          <label><input type="checkbox"><i></i><span>Собаки</span><b>42</b></label>
          <label><input type="checkbox"><i></i><span>Кошки</span><b>38</b></label>
          <label><input type="checkbox"><i></i><span>Птицы</span><b>12</b></label>
          <label><input type="checkbox"><i></i><span>Грызуны</span><b>8</b></label>
        </div>
      </div>
      <div class="group">
        <div class="group-title">
          <span>Возраст</span>
          ▼
        </div>
        <div class="group-body">
          <input type="range" min="0" max="15" value="15" class="slider">
          <div class="range-labels"><span>0 лет</span><span>До 15 лет</span></div>
        </div>
      </div>
      <div class="group">
        <div class="group-title"><span>Пол</span>▼</div>
      </div>
      <div class="group">
        <div class="group-title">
          <span>Размер</span>
          ▼
        </div>
        <div class="group-body">
          <label><input type="checkbox"><i></i><span>Маленький</span></label>
          <label><input type="checkbox"><i></i><span>Средний</span></label>
          <label><input type="checkbox"><i></i><span>Крупный</span></label>
        </div>
      </div>
      <div class="help">
        <h4>Нужна помощь в выборе?</h4>
        <p>Наши эксперты помогут найти идеального друга под ваш образ жизни.</p>
        <a href="#" class="btn-black btn-small">Консультация</a>
      </div>
    </aside>

    <main class="main">
      <div class="main-head">
        <div class="info">
          <span>Найдено питомцев: <strong>124</strong></span>
          <span>Показано: <strong>1-9</strong></span>
        </div>
        <div class="actions">
          <div class="search">
            🔎︎
            <input type="text" placeholder="Искать по имени...">
          </div>
          <div class="sort">
            <span>Сортировка</span>
            ▼
          </div>
        </div>
      </div>

      <div class="grid">
        <div class="card">
          <div class="img-wrap">
            <img src="content/foto/собака глвная индекс.jpg" alt="Барон">
            <span class="tag-yellow">Звезда</span>
            <button class="like">❤️</button>
          </div>
          <div class="body">
            <div class="head"><h3>Барон</h3><span>2 года</span></div>
            <p class="breed">Золотистый ретривер</p>
            <p class="desc">Дружелюбный и активный питомец, который ищет заботливую семью.</p>
            <a href="#" class="btn-black btn-full meet">Познакомиться</a>
          </div>
        </div>
        <div class="card">
          <div class="img-wrap">
            <img src="content/foto/пушистый рыжий кот.jpg" alt="Луна">
            <span class="tag-green">Новинка</span>
            <button class="like">❤️</button>
          </div>
          <div class="body">
            <div class="head"><h3>Луна</h3><span>7 месяцев</span></div>
            <p class="breed">Британская короткошерстная</p>
            <p class="desc">Дружелюбный и активный питомец, который ищет заботливую семью.</p>
            <a href="#" class="btn-black btn-full meet">Познакомиться</a>
          </div>
        </div>
        <div class="card">
          <div class="img-wrap">
            <img src="content/foto/поиграть 4.jpg" alt="Чарли">
            <button class="like active">❤️</button>
          </div>
          <div class="body">
            <div class="head"><h3>Чарли</h3><span>1 год</span></div>
            <p class="breed">Джек-рассел терьер</p>
            <p class="desc">Дружелюбный и активный питомец, который ищет заботливую семью.</p>
            <a href="#" class="btn-black btn-full meet">Познакомиться</a>
          </div>
        </div>
        <div class="card">
          <div class="img-wrap">
            <img src="content/foto/котик зеленый фон.jpg" alt="Оливия">
            <button class="like">❤️</button>
          </div>
          <div class="body">
            <div class="head"><h3>Оливия</h3><span>3 года</span></div>
            <p class="breed">Сиамская кошка</p>
            <p class="desc">Дружелюбный и активный питомец, который ищет заботливую семью.</p>
            <a href="#" class="btn-black btn-full meet">Познакомиться</a>
          </div>
        </div>
        <div class="card">
          <div class="img-wrap">
            <img src="content/foto/хаски.jpg" alt="Макс">
            <button class="like">❤️</button>
          </div>
          <div class="body">
            <div class="head"><h3>Макс</h3><span>4 года</span></div>
            <p class="breed">Немецкая овчарка</p>
            <p class="desc">Дружелюбный и активный питомец, который ищет заботливую семью.</p>
            <a href="#" class="btn-black btn-full meet">Познакомиться</a>
          </div>
        </div>
        <div class="card">
          <div class="img-wrap">
            <img src="content/foto/поиграть 3.jpg" alt="Снежок">
            <button class="like active">❤️</button>
          </div>
          <div class="body">
            <div class="head"><h3>Чунга Чанга</h3><span>3 месяца</span></div>
            <p class="breed">Бразильская обезьяна</p>
            <p class="desc">Дружелюбный и активный питомец, который ищет заботливую семью.</p>
            <a href="#" class="btn-black btn-full meet">Познакомиться</a>
          </div>
        </div>
      </div>

      <div class="pages">
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <span>...</span>
        <button>14</button>
        <button class="next">➔</button>
      </div>
    </main>
  </div>
</div>


<div class="modal" id="modal">
  <div class="modal-box">
    <button class="modal-close" id="closeModal">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <div class="modal-inner">
      <div class="modal-form">
        <h2>Заявка на знакомство</h2>
        <p>Пожалуйста, заполните анкету, и наш специалист свяжется с вами в ближайшее время.</p>
        <form id="form">
          <div class="field">
            <label>Ваше имя</label>
            <input type="text" placeholder="Александр Иванов" required>
          </div>
          <div class="row">
            <div class="field">
              <label>Телефон</label>
              <input type="tel" placeholder="+7 (___) __-__-__" required>
            </div>
            <div class="field">
              <label>Email</label>
              <input type="email" placeholder="example@mail.com" required>
            </div>
          </div>
          <div class="field">
            <label>Есть ли у вас опыт содержания собак?</label>
            <textarea placeholder="Расскажите немного о вашем опыте..." rows="4"></textarea>
          </div>
          <label class="check"><input type="checkbox" required><i></i><span>Я согласен на обработку персональных данных и принимаю условия политики конфиденциальности.</span></label>
          <label class="check"><input type="checkbox" required><i></i><span>Я понимаю ответственность за содержание животного и готов обеспечить ему достойный уход.</span></label>
          <button type="submit" class="btn-yellow btn-full">Отправить заявку</button>
        </form>
      </div>
      <div class="modal-pet">
        <div class="pet-card-modal">
          <div class="img-wrap">
            <img id="m-img" src="content/foto/собака глвная индекс.jpg" alt="Питомец">
            <span class="tag-yellow" id="m-badge">Звезда</span>
            <button class="like"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></button>
          </div>
          <div class="body">
            <div class="head"><h3 id="m-name">Барон</h3><span id="m-age">2 года</span></div>
            <p class="breed" id="m-breed">Золотистый ретривер</p>
            <div class="tags"><span>Привит</span><span>Чипирован</span></div>
            <p class="desc" id="m-desc">«Дружелюбный и активный питомец, который ищет заботливую семью. Очень любит играть в мяч и долгие прогулки в парке. Барон отлично ладит с детьми и другими собаками.»</p>
            <div class="mini-stats">
              <div><span>ЗДОРОВЬЕ</span><b>Отличное</b></div>
              <div><span>ХАРАКТЕР</span><b>Добрый, игривый</b></div>
            </div>
            <div class="curator">
              <img src="content/foto/куратор.jpg" alt="Куратор">
              <div><span>Куратор питомца</span><b>Анна Сергеева</b></div>
              <i class="ok"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg></i>
            </div>
          </div>
        </div>
      </div>
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
<li>✉️ <a href="mailto:hello@happypet.ru">hello@happypet.ru</a></li>
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
      <div><a href="#">Политика конфиденциальности</a><a href="#">Оферта</a></div>
    </div>
  </div>
</footer>
</body>
<script src="content/js/catalog.js"></script>
</html>
