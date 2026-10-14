<?php
$pageTitle = "Контакты — Happy Pet";
include 'header.php';
?>
    <link rel="stylesheet" href="content/css/contacts.css">

    <div class="block hero" id="top">
        <div class="wrap">
            <div class="hero-content">
                <h1>Мы всегда рады новым друзьям</h1>
                <p>Есть вопросы о питомцах, волонтерстве или вы хотите предложить сотрудничество? Напишите нам, и наша команда ответит вам в течение 24 часов.</p>
            </div>
        </div>
    </div>

    <div class="block" id="form-section">
        <div class="wrap">
            <div class="form-container">
                <div class="form-left">
                    <h2>Отправьте сообщение</h2>
                    <p>Заполните форму ниже, и мы свяжемся с вами.</p>
                    <form>
                        <div class="field">
                            <label>Ваше имя</label>
                            <input type="text" placeholder="Александр Иванов" required>
                        </div>
                        <div class="field">
                            <label>Электронная почта</label>
                            <input type="email" placeholder="example@mail.com" required>
                        </div>
                        <div class="field">
                            <label>Тема обращения</label>
                            <select required>
                                <option value="">Выберите тему</option>
                                <option>Вопрос по усыновлению</option>
                                <option>Волонтерство</option>
                                <option>Сотрудничество</option>
                                <option>Другое</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Ваше сообщение</label>
                            <textarea rows="5" placeholder="Расскажите подробнее..." required></textarea>
                        </div>
                        <label class="check">
                            <input type="checkbox" required>
                            <i></i>
                            <span>Я согласен на обработку моих персональных данных в соответствии с политикой конфиденциальности</span>
                        </label>
                        <button type="submit" class="btn-red btn-full">
                            💬 Отправить заявку
                        </button>
                    </form>
                </div>
                <div class="form-right">
                    <h2>Наши контакты</h2>
                    <div class="contact-item">
                        <div class="icon">🕻</div>
                        <div>
                            <b>Телефон</b>
                            <p>+7 (495) 123-45-67</p>
                            <span>Пн-Пт с 9:00 до 20:00</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon">✉︎</div>
                        <div>
                            <b>Электронная почта</b>
                            <p><a href="mailto:hello@happypet.ru">hello@happypet.ru</a></p>
                            <span>Для общих вопросов и предложений</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon">⚲</div>
                        <div>
                            <b>Адрес приюта</b>
                            <p>г. Магнитогорск, ул. Звериная, 36</p>
                            <span>Приезжайте в гости познакомиться!</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="icon">◔</div>
                        <div>
                            <b>Часы приема посетителей</b>
                            <a href="#" class="map-link">Открыть карту</a>
                            <div class="schedule">
                                <div><span>Пн - Пт:</span><b>10:00 - 18:00</b></div>
                                <div><span>Сб - Вс:</span><b>11:00 - 16:00</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block gray" id="faq">
        <div class="wrap">
            <h2 class="title-big">Часто задаваемые вопросы</h2>
            <p class="subtitle">Возможно, мы уже ответили на ваш вопрос здесь</p>
            <div class="faq-list">
                <div class="faq-item">
                    <h3>Как я могу забрать животное из приюта?</h3>
                    <p>Процесс начинается с заполнения анкеты и личного знакомства с питомцем. После этого проводится небольшое интервью с нашими кураторами. Мы хотим убедиться, что животное попадет в любящие и ответственные руки. Обязательным условием является заключение договора ответственного содержания.</p>
                </div>
                <div class="faq-item">
                    <h3>Можно ли приехать и просто погулять с собаками?</h3>
                    <p>Да, конечно! Мы всегда рады волонтерам. Свяжитесь с нами для записи на прогулку.</p>
                </div>
                <div class="faq-item">
                    <h3>Какую помощь приюту можно оказать?</h3>
                    <p>Вы можете помочь кормом, лекарствами, стать волонтером или сделать денежное пожертвование.</p>
                </div>
                <div class="faq-item">
                    <h3>Все ли животные привиты и здоровы?</h3>
                    <p>Да, все наши питомцы проходят ветеринарный осмотр и вакцинацию перед передачей новому владельцу.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block" id="cta">
        <div class="wrap">
            <div class="cta-box">
                <div class="icon-big">❔</div>
                <h2>Не нашли ответ на свой вопрос?</h2>
                <p>Наши специалисты готовы проконсультировать вас лично.</p>
                <a href="#form-section" class="btn-red">Задать свой вопрос</a>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>