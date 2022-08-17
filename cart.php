<?php include 'header.php'; ?>


<div id="main" class="cartpage">
    <div class="container">
        <div class="top">
            <div class="wrapper">
                <div class="heading">Корзина</div>
                <a href="#" class="clear">Удалить все</a>
            </div>
        </div>

        <div class="cart_content">
            <div class="order_list">
                <div class="item">
                    <div class="img"><a href="#"><img src="img/products/asic.png"></a></div>
                    <div class="info">
                        <a href="#" class="name">Antminer S17 56Th</a>
                        <div class="price">
                            <span>4 789 ₽</span>
                            <div class="stock in_stock">В наличии</div>
                        </div>
                        <div class="qty">
                            <button class="bt_minus"><img src="img/minus.svg"></button>
                            <input type="text" name="quantity" value="1" size="1" class="cart-quantity" />
                            <button class="bt_plus"><img src="img/plus.svg"></button>
                        </div>
                    </div>
                    <div class="total_product">
                        <div class="total_price">4 789 ₽</div>
                        <a href="#"><span>Удалить</span> <img src="img/x.svg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a href="#"><img src="img/products/asic.png"></a></div>
                    <div class="info">
                        <a href="#" class="name">Antminer S17 56Th</a>
                        <div class="price">
                            <span>4 789 ₽</span>
                            <div class="stock out_stock">Нет в наличии</div>
                        </div>
                        <div class="qty">
                            <button class="bt_minus"><img src="img/minus.svg"></button>
                            <input type="text" name="quantity" value="1" size="1" class="cart-quantity" />
                            <button class="bt_plus"><img src="img/plus.svg"></button>
                        </div>
                    </div>
                    <div class="total_product">
                        <div class="total_price">4 789 ₽</div>
                        <a href="#"><span>Удалить</span> <img src="img/x.svg"></a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a href="#"><img src="img/products/asic.png"></a></div>
                    <div class="info">
                        <a href="#" class="name">Antminer S17 56Th</a>
                        <div class="price">
                            <span>4 789 ₽</span>
                            <div class="stock in_stock">В наличии</div>
                        </div>
                        <div class="qty">
                            <button class="bt_minus"><img src="img/minus.svg"></button>
                            <input type="text" name="quantity" value="1" size="1" class="cart-quantity" />
                            <button class="bt_plus"><img src="img/plus.svg"></button>
                        </div>
                    </div>
                    <div class="total_product">
                        <div class="total_price">4 789 ₽</div>
                        <a href="#"><span>Удалить</span> <img src="img/x.svg"></a>
                    </div>
                </div>
            </div>
            <div class="total_block">
                <div class="flexi">
                    <div class="total_lines">
                        <table>
                            <tbody>
                                <tr class="overall">
                                    <td>Итог</td>
                                    <td>142 154 ₽</td>
                                </tr>
                                <tr>
                                    <td>Товаров на сумму</td>
                                    <td>168 154 ₽</td>
                                </tr>
                                <tr>
                                    <td>Скидка</td>
                                    <td>12 154 ₽</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <form class="promo">
                        <input type="text" name="promo" placeholder="Введите промокод">
                        <button>Применить</button>
                    </form>
                </div>
                <a href="cart2.php" class="checkout">Оформить заказ</a>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>


<script>
    // Убавляем кол-во по клику
        $('.qty .bt_minus').click(function() {
        let $input = $(this).parent().find('.cart-quantity');
        let count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
    });
    // Прибавляем кол-во по клику
    $('.qty .bt_plus').click(function() {
        let $input = $(this).parent().find('.cart-quantity');
        let count = parseInt($input.val()) + 1;
        count = count > parseInt($input.data('max-count')) ? parseInt($input.data('max-count')) : count;
        $input.val(parseInt(count));
    }); 
    // Убираем все лишнее и невозможное при изменении поля
    $('.qty .cart-quantity').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
        if (this.value == "") {
            this.value = 1;
        }
        if (this.value > parseInt($(this).data('max-count'))) {
            this.value = parseInt($(this).data('max-count'));
        }    
    });   
</script>