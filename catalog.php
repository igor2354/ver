<?php include 'header.php'; ?>

<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li>Каталог</li>
        </ul>
    </div>
</div>

<div id="main">
    <div class="container">
        <div class="heading">Каталог товаров</div>
        <div class="infoline">
            <div class="filter_name desktop"><span>Фильтры</span> <!-- <img class="filter_icon" src="img/filter.svg"> --></div>
            <!-- <div class="filter_name mobile">Фильтры</div> -->
            <div class="sort">
                <div class="found">478 товаров</div>
                <div class="sort_dropdown">
                    <label>Сортировать: </label>
                    <select>
                        <option>цена по убыванию</option>
                        <option>цена по возрастанию</option>
                        <option>по наименованию</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <section id="catalog">
        <div class="grid">
            <div id="filter" class="filter">
                <div class="head">Фильтры <span id="cloze"><img src="img/x.svg"></span></div>
                <div class="tabs">

                  <div class="tab">
                    <input type="checkbox" class="acc" id="chck1">
                    <label class="tab-label" for="chck1">Алгоритм</label>
                    <div class="tab-content">
                        <div class="search">
                            <div class="wrapper">
                                <input type="search" id="search" placeholder="Поиск" name="q">
                                <button><img src="img/search.svg"></button>
                            </div>
                        </div>
                        <div class="filter_values">
                            <label for="checkbox1">
                                <input id="checkbox1" type="checkbox" name="Blake256">
                                Blake256
                                <span class="checkmark"></span>
                                <span>1</span>
                            </label>
                            <label for="checkbox2">
                                <input id="checkbox2" type="checkbox" name="Blake2b">
                                Blake2b
                                <span class="checkmark"></span>
                                <span>4</span>
                            </label>
                            <label for="checkbox3">
                                <input id="checkbox3" type="checkbox" name="Blake2b">
                                CryptoNight
                                <span class="checkmark"></span>
                                <span>2</span>
                            </label>
                            <label for="checkbox4">
                                <input id="checkbox4" type="checkbox" name="Blake2b">
                                EagleSong
                                <span class="checkmark"></span>
                                <span>0</span>
                            </label>
                            <label for="checkbox5">
                                <input id="checkbox5" type="checkbox" name="Blake2b">
                                Equihash
                                <span class="checkmark"></span>
                                <span>10</span>
                            </label>
                            <label for="checkbox6">
                                <input id="checkbox6" type="checkbox" name="Blake2b">
                                Ethash
                                <span class="checkmark"></span>
                                <span>7</span>
                            </label>
                        </div>
                    </div>
                  </div>
                  <div class="tab">
                    <input type="checkbox" class="acc" id="chck2">
                    <label class="tab-label" for="chck2">Криптовалюта</label>
                    <div class="tab-content">
                        <p>Тут фильтры по крипте</p>
                    </div>
                  </div>

                  <div class="tab not_slider">
                    <label class="tab-label wo_line">Хэшрэйт (мощность)</label>
                        <div class="double-slider">
                            <div id="power_slider"></div>
                            <div class="input-block">
                                <input id="input-number-" type="number" name="after">
                                <input id="input-number+" type="number" name="before">
                            </div>
                        </div>
                  </div>

                </div>
                <div class="btns">
                    <a href="#" class="link">Применить</a>
                    <a href="#">Сбросить фильтры</a>
                </div>
            </div>
            <div class="catalog">
                <div class="wrapper">

                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative added" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <img src="img/products/asic.png">
                            <div class="label">В наличии</div>
                        </div>
                        <div class="info">
                            <div class="name">Antminer S17 56Th</div>
                            <fieldset class="rate">
                                <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                                <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                                <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                                <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                                <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                                <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                                <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                                <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                                <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                                <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                            </fieldset>
                            <div class="description">
                                <div class="description__list">
                                    <div class="description__item">
                                        <span class="description__item-name">Алгоритм:</span>
                                        <span class="description__item-value">SHA256</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Криптовалюта:</span>
                                        <span class="description__item-value">Bitcoin (BTC)</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Хэшрейт (Мощность):</span>
                                        <span class="description__item-value">56Th/s</span>
                                    </div>

                                    <div class="description__item">
                                        <span class="description__item-name">Потребление электроэнергии:</span>
                                        <span class="description__item-value">2520W</span>
                                    </div>
                                </div>
                            </div>
                            <div class="price">200 000 ₽</div>
                        </div>
                        <div class="btns">
                            <a class="link" href="#">В корзину</a>
                            <a class="link negative" href="#"></a>
                        </div>
                    </div>

                </div>
                <div class="more">
                    <a class="link negative">Показать больше</a>
                </div>
                <div class="pagination">
                    <ul>
                        <li class="active">1</li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">6</a></li>
                        <li><a href="">...</a></li>
                        <li><a href="">></a></li>
                        <li><a href="">>></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php'; ?>


<script>
    var power_slider = document.getElementById('power_slider');
    noUiSlider.create(power_slider, {
        start: [0, 50],
        connect: true,
        range: {
            'min': 0,
            'max': 50
        }
    });

    var inputNumberAfter = document.getElementById('input-number-');
    var inputNumberBefore = document.getElementById('input-number+');

    power_slider.noUiSlider.on('update', function (values, handle) {

        var value = values[handle];

        if (handle) {
            inputNumberBefore.value = value;
        } else {
            inputNumberAfter.value = value;
        }
    });

    inputNumberAfter.addEventListener('change', function () {
        power_slider.noUiSlider.set([this.value, null]);
    });
    inputNumberBefore.addEventListener('change', function () {
        power_slider.noUiSlider.set([null, this.value]);
    });
</script>