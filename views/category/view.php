<div class="container">
    <?= \app\widgets\MenuWidget::widget() ?>
</div>

<div id="body">
    <div class="container">

        <div id="content">
            <section class="products">
                <? foreach ($goods as $good) { ?>
                    <article>
                        <a href="product.html"><img src="/web/images/<?= $good['img'] ?>" alt="<?= $good['title'] ?>"></a>
                        <h3><a href="product.html"><?= $good['title'] ?></a></h3>
                        <h4><a href="product.html"><?= $good['price'] ?> ₽</a></h4>
                        <a href="cart.html" class="btn-add">Добавить в корзину</a>
                    </article>
                <? } ?>
            </section>
        </div>

    </div>
</div>