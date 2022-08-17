<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BUY-ASIC</title>
    <meta name="author" content="start-web24.ru">
    <meta name="description" content="">
    <link rel="icon" href="img/favicon.svg">
    <meta name="theme-color" content="#E84058">
    <link rel="manifest" href="manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-2.2.4.min.js"  crossorigin="anonymous"></script>
    <link href="css/flickity.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="css/main.css" rel="stylesheet"> <!-- Шапка и подвал -->
    <link href="css/nice-select.css" rel="stylesheet" />
    <link  href="css/lightgallery-bundle.min.css" rel="stylesheet">
    <link  href="css/lg-fullscreen.css" rel="stylesheet">
    <link  href="css/lg-thumbnail.css" rel="stylesheet">
    <link  href="css/lg-transitions.css" rel="stylesheet">
    <link href="css/nouislider.min.css" rel="stylesheet"> <!-- Двойной слайдер -->
    <link href="css/style.css" rel="stylesheet"> <!-- Основной -->
    <link href="css/responsive.css" rel="stylesheet"> <!-- Адаптив -->
    
    <script src="https://use.fontawesome.com/aeea430151.js"></script>
</head>

<body>

    

    <header>
        <div class="top">
            <div class="container">
                <div class="wrapper">
                    <div class="address">г. Город, ул. Улица, д. 454</div>
                    <div class="phone"><a href="tel:+78008008080">+7 (800) 800 - 80 - 80</a></div>
                    <div class="mail"><a href="mailto:mail@example.com">mail@example.com</a></div>
                </div>
            </div>
        </div>
        <div class="middle">
            <div class="container">
                <div class="wrapper">
                    <div class="logo">
                        <a href="/"><img src="img/logo.svg"></a>
                    </div>
                    <div class="dropdown_catalog catalog">
                        <button onclick="dropDownCatalog()" class="dropbtn">
                            <img src="img/catalog.svg">Каталог</button>
                            <div id="Dropdown" class="dropdown-content">
                                <a href="/newest/">Новинки каталога</a>
                                <a href="/akciya/">Акции</a>
                                <a href="/rasprodazha/">Распродажа</a>
                                <a href="/zhenskaya-kollekciya/">Женщинам</a>
                                <a href="/muzhskaja-kollekcija/">Мужчинам</a>
                                <a href="/detskaja-odezhda/">Детям</a>
                            </div>
                        </div>
                    <div class="search">
                        <button id="search_btn" onclick="myFunction()"><img src="img/search.svg"></button>
                        <div id="search_wrapper" class="wrapper">
                            <input type="search" id="search" placeholder="Поиск" name="q">
                            <button><img src="img/search.svg"></button>
                        </div>
                    </div>
                    <script>
                        /*function myFunction() {
                          var element = document.getElementById("search_wrapper");
                          element.classList.toggle("down");
                        }
                        window.onclick = function(event) {
                          element.classList.toggle("down");
                        }*/
                    </script>
                    <div class="main_menu">
                        <div class="fav">
                            <a href="#">
                                <span class="fav_name">Избранное </span>
                                <img src="img/favorite.svg">
                                <span class="fav_value">0</span>
                            </a>
                        </div>

                        <div class="cart">
                            <a href="#">
                                <span class="cart_name">Корзина </span>
                                <img src="img/cart.svg">
                                <span class="cart_value">3</span>
                            </a>
                        </div>

                        <div class="menu fullmenu"><span>Меню </span><div class="burger"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <div class="overlay">
        <div class="container">
            <div class="fs_menu">
                <div class="link"><a href="/catalog.php">Каталог</a></div>
                <div class="link"><a href="/services.php">Услуги</a></div>
                <div class="link"><a href="/about.php">О компании</a></div>
                <div class="link"><a href="/reviews.php">Отзывы</a></div>
                <div class="link"><a href="/newslist.php">Новости</a></div>
                <div class="link"><a href="#">Доставка</a></div>
                <div class="link"><a href="/contacts.php">Контакты</a></div>
                <div class="contacts">
                    <div class="menu-head">Контакты</div>
                    <p><a href="mailto:mail@example.com">mail@example.com</a></p>
                    <p><a href="tel:+7 (800) 800-80-80">+7 (800) 800-80-80</a> </p>
                    <p>г. Город, ул. Улица, д. 454</p>
                    <div class="social">
                        <a href="#"><img src="img/vk.svg"></a>
                        <a href="#"><img src="img/inst.svg"></a>
                        <a href="#"><img src="img/face.svg"></a>
                        <a href="#"><img src="img/tw.svg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="currency_table">
        <div class="wrapper runline-wrapper">
            <div class="runline-list">
                <div class="item">
                    <div class="icon">
                        <img src="img/eth.svg">
                    </div>
                    <div class="pair">ETH/USD</div>
                    <div class="price">2412.44</div>
                    <div class="changes">+22.44 (+44%)</div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/eth.svg">
                    </div>
                    <div class="pair">ETH/USD</div>
                    <div class="price">2412.44</div>
                    <div class="changes">+22.44 (+44%)</div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/eth.svg">
                    </div>
                    <div class="pair">ETH/USD</div>
                    <div class="price">2412.44</div>
                    <div class="changes">+22.44 (+44%)</div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/eth.svg">
                    </div>
                    <div class="pair">ETH/USD</div>
                    <div class="price">2412.44</div>
                    <div class="changes">+22.44 (+44%)</div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/eth.svg">
                    </div>
                    <div class="pair">ETH/USD</div>
                    <div class="price">2412.44</div>
                    <div class="changes">+22.44 (+44%)</div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="img/eth.svg">
                    </div>
                    <div class="pair">ETH/USD</div>
                    <div class="price">2412.44</div>
                    <div class="changes">+22.44 (+44%)</div>
                </div>
            </div>
        </div>
    </section>

 