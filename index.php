<?php include 'header.php'; ?>

<section id="cta">
    <div class="container">
        <div class="wrapper">
            <div class="cta-block">
                <div class="name">BUY-ASIC</div>
                <div class="text">Продажа оборудования для майнинга с доставкой по всему миру</div>
                <div class="btns">
                    <a href="#" class="link">Получить прайс-лист</a>
                    <a href="#" class="link negative"><div class="icon calc"></div>Калькулятор дохода</a>
                </div>
            </div>

            <div class="img"><img src="img/slider/slider1.jpg"></div>

        </div>
    </div>
</section>

<section id="why">
    <div class="container">
        <div class="wrapper">
            <div class="heading">
                Почему клиенты выбирают нас?
            </div>
            <div class="flex">
                <div class="item">
                    <img src="img/clock.svg">
                    <div class="name">Быстрая доставка</div>
                    <div class="text">Доставка товара занимает от 774 до 2134 дней</div>
                </div>
                <div class="item">
                    <img src="img/percent.svg">
                    <div class="name">Постоянные скидки</div>
                    <div class="text">Мы стараемся радовать наших клиентов прятными скидками</div>
                </div>
                <div class="item">
                    <img src="img/feedback.svg">
                    <div class="name">Отзывчивая поддержка</div>
                    <div class="text">Оперативно поможем вам решить любую проблему</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="slider">
    <div class="container">
        <div class="heading">Популярные товары</div>
    </div>
    <div class="main-carousel" data-flickity='{ "fade": true }'>
        <div class="carousel-cell">
            <div class="info">
                <div class="name">AvalonMiner 1166 Pro</div>
                <div class="text">Самый мощный асик для добычи BTC в 2022 году</div>
                <div class="btns">
                    <a href="#" class="link">Подробнее</a>
                </div>
            </div>
            <div class="photo-price">
                <div class="prices">
                    <div class="discount">Скидка 35%</div>
                    <div class="total">250 000 ₽</div>
                    <div class="full-price">381 000 ₽</div>
                </div>
                <div class="img"><img src="img/slider/slider2.png"></div>
            </div>
        </div>
        <div class="carousel-cell">
            <div class="info">
                <div class="name">AvalonMiner 1166 Pro</div>
                <div class="text">Самый мощный асик для добычи BTC в 2022 году</div>
                <div class="btns">
                    <a href="#" class="link">Подробнее</a>
                </div>
            </div>
            <div class="photo-price">
                <div class="prices">
                    <div class="discount">Скидка 35%</div>
                    <div class="total">250 000 ₽</div>
                    <div class="full-price">381 000 ₽</div>
                </div>
                <div class="img"><img src="img/slider/slider2.png"></div>
            </div>
        </div>

        <div class="control static-banner">
            <a href="#" id="toCat">Перейти в каталог</a>
            <div class="control-arrows"></div>
        </div>

    </div>
    <div class="black-line"></div>
</section>

<section id="about">
    <div class="container">
        <div class="wrapper">
            <div class="info">
                <div class="heading">О компании Buy-Asic</div>
                <div class="text">
                    <p>Наша компания помогает купить майнеры в Китае и РФ по наилучшим ценам. Мы работаем с ведущими производителями майнеров: Bitmain, Whatsminer, Avalon и др.</p>
                    <p>Купить майнеры в Китае стало проще. Мы выкупаем, проверяем и организуем отправку майнеров в любую точку мира по наилучшим ценам.</p>
                    <div class="btns">
                        <a href="#" class="link negative">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="img"><img src="img/bigicon.svg"></div>
        </div>
    </div>
</section>

<section id="calc">
    <div class="container">
        <div class="wrapper">
            <div class="text">
                <div class="heading">Не можете выбрать подходящий товар?</div>
                <div class="desc">Воспользуйтесь нашим калькулятором майнинга</div>
            </div>
            <div class="calculator">
                <form>
                    <div class="wrapper">
                        <div class="name">Валюта</div>
                        <div class="form-group">
                                <input type="radio" id="currency1" name="currency" value="rub">
                            <label for="currency1" class="radio1">
                            </label>
                                <input type="radio" id="currency2" name="currency" value="usd">
                            <label for="currency2" class="radio2">
                            </label>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="name">Вложения</div>
                        <div class="form-group">
                            <input type="range" id="income" name="income" min="0" max="9999" value="0">
                            <input id="income_inp" type="number" min="0" max="9999" value="0" name="income" source="[name=income]">
                            <label class="back" for="income_inp">₽</label>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="name">Стоимость электроэнергии (₽/кВт)</div>
                        <div class="form-group">
                            <input type="range" id="payment" name="payment" min="0" max="9999" value="0">
                            <input id="payment_inp" type="number" min="0" max="9999" value="0" name="payment" source="[name=payment]">
                            <label class="back" for="payment_inp">₽</label>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="btns">
                            <a href="#" class="link">Рассчитать</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<section id="news">
    <div class="container">
        <div class="top">
            <div class="heading">Последние новости</div>
            <a href="#">Все новости</a>
        </div>

        <div class="news_wrap">

            <div class="swiper-button-next slider-button-next"></div>
            <div class="swiper-button-prev slider-button-prev"></div>

            <div class="news_slider swiper">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="item">
                            <img src="img/news/news1.jpg">
                            <div class="label">18 апреля 2022</div>
                            <a href="/news.php" class="name">Какой асик выбрать в 2022 году?</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item">
                            <img src="img/news/news1.jpg">
                            <div class="label">18 апреля 2022</div>
                            <a href="/news.php" class="name">Какой асик выбрать в 2022 году?</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item">
                            <img src="img/news/news1.jpg">
                            <div class="label">18 апреля 2022</div>
                            <a href="/news.php" class="name">Какой асик выбрать в 2022 году?</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item">
                            <img src="img/news/news1.jpg">
                            <div class="label">18 апреля 2022</div>
                            <a href="/news.php" class="name">Какой асик выбрать в 2022 году?</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a href="#" class="link negative mobile">Все новости</a>
    </div>
</section>

<?php include 'footer.php'; ?>

