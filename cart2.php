<?php include 'header.php'; ?>


<div id="main" class="cartpage">
    <div class="container">
        <div class="heading">Оформление заказа</div>

        <div class="checkout_cart">
            <div class="order_form">
                <form>
                    <div class="form_name">Введите данные для заказа</div>
                    <div class="inputs">
                        <input type="text" name="name" placeholder="Имя">
                        <input type="tel" name="phone" placeholder="Номер телефона">
                        <input type="email" name="email" placeholder="E-mail (не обязательно)">
                    </div>
                    <div class="form_name">Введите данные для доставки</div>
                    <div class="inputs delivery">
                        <div class="row">
                            <input type="text" name="index" placeholder="Почтовый индекс">
                            <input type="text" name="city" placeholder="Город">
                        </div>
                        <div class="row">
                            <input type="text" name="street" placeholder="Улица">
                            <input type="text" name="build" placeholder="Дом">
                            <input type="text" name="appartment" placeholder="Квартира">
                        </div>
                    </div>
                    <div class="finish">
                        <a href="#" class="link">Оформить заказ</a>
                        <p class="manager">После оформления с вами свяжется наш менеджер для подтверждения заказа</p>
                    </div>
                </form>
            </div>
            <div class="product_list_block">
                    <table class="product_list">
                        <tbody>
                            <tr>
                                <td class="img"><div><img src="img/products/asic.png"></div></td>
                                <td class="info">
                                    <p>Antminer S17 56Th</p>
                                    <p>4 789 ₽ <span>x1</span></p>
                                </td>
                                <td class="price">9 578 ₽</td>
                            </tr>
                            <tr>
                                <td class="img"><div><img src="img/products/asic.png"></div></td>
                                <td class="info">
                                    <p>Antminer S17 56Th</p>
                                    <p>4 789 ₽ <span>x1</span></p>
                                </td>
                                <td class="price">9 578 ₽</td>
                            </tr>
                            <tr>
                                <td class="img"><div><img src="img/products/asic.png"></div></td>
                                <td class="info">
                                    <p>Antminer S17 56Th</p>
                                    <p>4 789 ₽ <span>x1</span></p>
                                </td>
                                <td class="price">9 578 ₽</td>
                            </tr>
                        </tbody>
                    </table>
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
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>