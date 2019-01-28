<div class="container">
    <?= \app\widgets\MenuWidget::widget() ?>
</div>

<div id="breadcrumbs">
    <div class="container">
        <ul>

            <li><a href="/">На главную</a></li>
            <!--            <li> --><?//= $category['category_name'] ?><!-- </li>-->
        </ul>
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<div id="body">
    <div class="container">
        <div id="content" class="full">
            <div class="product">
                <div class="image">
                    <img src="/web/images/<?= $good['bigimg'] ?>" alt="<?= $good['title'] ?>">
                </div>
                <div class="details">
                    <h1><?= $good['name'] ?></h1><br>
                    <h4><?= $good['price'] ?> ₽</h4>
                    <div class="entry">
                        <p><?= $good['description'] ?></p>
                    </div>
                    <div class="actions">
                        <label>Количество:</label>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <a href="cart.html" class="btn-grey">Добавить в корзину</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / content -->
    </div>
    <!-- / container -->
</div>
<!-- / body -->