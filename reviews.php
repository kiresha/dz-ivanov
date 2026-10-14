<?php
$pageTitle = "Обзоры — Happy Pet";
include 'header.php';
?>
    <link rel="stylesheet" href="content/css/reviews.css">

    <div class="block hero" id="top">
        <div class="wrap">
            <div class="hero-content">
                <h1>Полезное для вас и ваших хвостиков</h1>
                <p>Мир питомцев полон открытий. Мы помогаем сделать каждое из них радостным и безопасным.</p>
            </div>
        </div>
    </div>

    <div class="block" id="featured">
        <div class="wrap">
            <div class="featured-card">
                <div class="featured-img">
                    <img src="content/foto/собака глвная индекс.jpg" alt="Щенок">
                    <span class="badge">Собаки</span>
                </div>
                <div class="featured-content">
                    <h2>Как выбрать идеальный рацион для щенка золотистого ретривера</h2>
                    <p>Правильное питание в первый год жизни — залог здоровья и долголетия вашей собаки. Разбираем составы холистиков и...</p>
                    <div class="meta">
                        <span>Анна Волкова</span>
                        <span>Ветеринар-диетолог</span>
                        <span>15 мая 2024</span>
                        <span>8 мин</span>
                    </div>
                    <a href="#" class="btn-red">Читать полностью</a>
                </div>
            </div>
        </div>
    </div>

    <div class="block" id="articles">
        <div class="wrap">
            <div class="main-content">
                <div class="content-head">
                    <h2>Последние публикации <span>6 статей</span></h2>
                    <div class="filters">
                        <button>⚙️ Фильтровать</button>
                    </div>
                </div>
                <div class="articles-grid">
                    <article class="article-card">
                        <div class="article-img">
                            <img src="content/foto/котик зеленый фон.jpg" alt="Кошка">
                            <span class="tag">Кошки</span>
                        </div>
                        <div class="article-body">
                            <h3>5 признаков того, что ваша кошка вас действительно любит</h3>
                            <p>Кошки выражают привязанность иначе, чем собаки. Узнайте, что означают...</p>
                            <div class="article-meta">
                                <span>Дмитрий Кот</span>
                                <span>12 мая 2024</span>
                                <span>5 мин</span>
                                <span class="views">12</span>
                            </div>
                        </div>
                    </article>
                    <article class="article-card">
                        <div class="article-img">
                            <img src="content/foto/поиграть 3.jpg" alt="Рептилия">
                            <span class="tag">Экзотика</span>
                        </div>
                        <div class="article-body">
                            <h3>Обустройство террариума для начинающих: пошаговый гид</h3>
                            <p>Создаем идеальный микроклимат для вашей первой рептилии. Свет, влажность...</p>
                            <div class="article-meta">
                                <span>Мария Рой</span>
                                <span>10 мая 2024</span>
                                <span>12 мин</span>
                                <span class="views">8</span>
                            </div>
                        </div>
                    </article>
                    <article class="article-card">
                        <div class="article-img">
                            <img src="content/foto/пушистый рыжий кот.jpg" alt="Груминг">
                            <span class="tag">Уход</span>
                        </div>
                        <div class="article-body">
                            <h3>Груминг в домашних условиях: необходимые инструменты</h3>
                            <p>Экономим на салонах без вреда для внешнего вида. Топ-10 расчесок и...</p>
                            <div class="article-meta">
                                <span>Елена Стиль</span>
                                <span>08 мая 2024</span>
                                <span>10 мин</span>
                                <span class="views">151</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="pagination">
                    <button class="active">1</button>
                    <button>2</button>
                    <button>3</button>
                    <span>...</span>
                    <button>12</button>
                    <button class="next">Дальше →</button>
                </div>
            </div>
            <aside class="sidebar">
                <div class="search-box">
                    <h3>🔎︎ Поиск по блогу</h3>
                    <input type="text" placeholder="Введите запрос...">
                </div>
                <div class="categories">
                    <h3>Категории</h3>
                    <ul>
                        <li class="active">Все статьи</li>
                        <li>Собаки</li>
                        <li>Кошки</li>
                        <li>Экзотика</li>
                        <li>Уход</li>
                        <li>Здоровье</li>
                        <li>Обучение</li>
                        <li>Истории</li>
                    </ul>
                </div>
                <div class="popular">
                    <h3>☆ Популярное сейчас</h3>
                    <ul>
                        <li>
                            <span class="title">Топ-10 самых умных пород собак 2024</span>
                            <span class="views">124 просмотров</span>
                        </li>
                        <li>
                            <span class="title">Почему кошки спят весь день?</span>
                            <span class="views">98 просмотров</span>
                        </li>
                        <li>
                            <span class="title">Психология попугаев: как понять птицу</span>
                            <span class="views">5.4к просмотров</span>
                        </li>
                    </ul>
                </div>
                <div class="faq">
                    <h3>Частые вопросы</h3>
                    <div class="faq-item">
                        <div class="faq-title">
                            <span>Как стать автором?</span>
                            <span class="arrow">▼</span>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <span>Как часто выходят статьи?</span>
                            <span class="arrow">▼</span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php include 'footer.php'; ?>