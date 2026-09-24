<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Контакты</title>
<link rel="stylesheet" href="content/css/contacts.css">
<link href="content/fonts/Inter/Inter-VariableFont_opsz,wght.ttf" rel="stylesheet">
</head>
<body>

<iframe src="navigation.html" id="nav"></iframe>

<div class="block" id="top">
  <div class="wrap">
    <div class="left">
      <h1>Мы всегда рады новым <span>друзьям</span></h1>
      <p>Есть вопросы о питомцах, волонтерстве или вы хотите предложить сотрудничество? Напишите нам, и наша команда ответит вам в течение 24 часов.</p>
    </div>
    <div class="right">
      <img src="content/foto/карта.jpg" alt="карта">
    </div>
  </div>
</div>

<div class="block" id="main">
  <div class="wrap">
    <div class="inner">
      <div class="form-box">
        <h2>Отправьте сообщение</h2>
        <p>Заполните форму ниже, и мы свяжемся с вами.</p>
        <form>
          <div class="row">
            <div class="field">
              <label>Ваше имя</label>
              <input type="text" placeholder="Иван Иванов">
            </div>
            <div class="field">
              <label>Электронная почта</label>
              <input type="email" placeholder="ivan@example.com">
            </div>
          </div>
          <div class="field">
            <label>Тема обращения</label>
            <select>
              <option>Вопрос по усыновлению</option>
              <option>Волонтерство</option>
              <option>Сотрудничество</option>
              <option>Другое</option>
            </select>
          </div>
          <div class="field">
            <label>Ваше сообщение</label>
            <textarea placeholder="Расскажите нам подробнее..."></textarea>
          </div>
          <label class="check">
            <input type="checkbox">
            <span>Я согласен на обработку моих персональных данных в соответствии с политикой конфиденциальности</span>
          </label>
          <button type="submit" class="btn-yellow btn-full">
            💬
            Отправить заявку
          </button>
        </form>
      </div>

      <div class="info-box">
        <h2>Наши контакты</h2>
        <div class="cards">
          <div class="card">
            <div class="icon">
              🕻 
            </div>
            <div class="text">
              <h4>Телефон</h4>
              <p class="main">+7 (495) 123-45-67</p>
              <p class="sub">Пн-Пт с 9:00 до 20:00</p>
            </div>
          </div>
          <div class="card">
            <div class="icon">
              ✉︎
            </div>
            <div class="text">
              <h4>Электронная почта</h4>
              <p class="main">hello@happypet.ru</p>
              <p class="sub">Для общих вопросов и предложений</p>
            </div>
          </div>
          <div class="card">
            <div class="icon">
              ⚲
            </div>
            <div class="text">
              <h4>Адрес приюта</h4>
              <p class="main">г. Магнитогорск, ул. Звериная, 36</p>
              <p class="sub">Приезжайте в гости познакомиться!</p>
            </div>
          </div>
        </div>

        <div class="hours">
          <div class="head">
            ◔
            <span>Часы приема посетителей</span>
            <a href="#">Открыть карту</a>
          </div>
          <div class="map">
            <img src="content/foto/карта.jpg" alt="Карта">
            <div class="pin">
            </div>
            <div class="time">
              <h5>График посещений</h5>
              <div class="schedule">
                <div class="day"><span>Пн - Пт:</span><span>10:00 - 18:00</span></div>
                <div class="day"><span>Сб - Вс:</span><span>11:00 - 16:00</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block gray" id="faq">
  <div class="wrap">
    <h2>Часто задаваемые вопросы</h2>
    <p>Возможно, мы уже ответили на ваш вопрос здесь</p>
    <div class="list">
      <details open>
        <summary>Как я могу забрать животное из приюта?</summary>
        <div class="answer">
          <p>Процесс начинается с заполнения анкеты и личного знакомства с питомцем. После этого проводится небольшое интервью с нашими кураторами. Мы хотим убедиться, что животное попадет в любящие и ответственные руки. Обязательным условием является заключение договора ответственного содержания.</p>
        </div>
      </details>
      <details>
        <summary>Можно ли приехать и просто погулять с собаками?</summary>
        <div class="answer">
          <p>Да, конечно! Мы всегда рады волонтерам. Свяжитесь с нами для записи на прогулку.</p>
        </div>
      </details>
      <details>
        <summary>Какую помощь приюту можно оказать?</summary>
        <div class="answer">
          <p>Вы можете помочь кормом, лекарствами, стать волонтером или сделать денежное пожертвование.</p>
        </div>
      </details>
      <details>
        <summary>Все ли животные привиты и здоровы?</summary>
        <div class="answer">
          <p>Да, все наши питомцы проходят ветеринарный осмотр и вакцинацию перед передачей новому владельцу.</p>
        </div>
      </details>
    </div>
    <div class="help">
      <div class="icon">
        ❔
      </div>
      <div class="text">
        <h4>Не нашли ответ на свой вопрос?</h4>
        <p>Наши специалисты готовы проконсультировать вас лично.</p>
      </div>
      <button class="btn-yellow">Задать свой вопрос</button>
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
<li>✉️ <a href="hello@happypet.ru">hello@happypet.ru</a></li>
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
</html>
