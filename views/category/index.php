<? use yii\helpers\Url; ?>
<div class="container">
    <?= \app\widgets\MenuWidget::widget() ?>
</div>

<div id="slider">
    <ul>
        <li style="background-image: url(/web/images/0.jpg)">
            <h3>Чтобы подчеркнуть красоту</h3>
            <h2>Подлинные бриллианты</h2>
<!--            <a href="#" class="btn-more">Read more</a>-->
        </li>
        <li class="purple" style="background-image: url(/web/images/01.jpg)">
            <h3>Она скажет “да”</h3>
            <h2>Обручальные кольца</h2>
<!--            <a href="#" class="btn-more">Read more</a>-->
        </li>
        <li class="yellow" style="background-image: url(/web/images/02.jpg)">
            <h3>Скоро в наличии</h3>
            <h2>Золотые браслеты</h2>
<!--            <a href="#" class="btn-more">Read more</a>-->
        </li>
    </ul>
</div>
<!-- / body -->

<div id="body">
    <div class="container">

        <div class="last-products">
            <h2>Последние добавленные товары</h2>
            <section class="products">
                <? foreach ($goods as $good) { ?>
                <article>
                    <a href="<?= Url::to(['good/index', 'name'=> $good['link_name']]) ?>"><img src="/web/images/<?= $good['img'] ?>" alt="<?= $good['title'] ?>"></a>
                    <h3><a href="<?= Url::to(['good/index', 'name'=> $good['link_name']]) ?>"><?= $good['title'] ?></a></h3>
                    <h4><a href="<?= Url::to(['good/index', 'name'=> $good['link_name']]) ?>"><?= $good['price'] ?> ₽</a></h4>
                    <a href="cart.html" class="btn-add">Добавить в корзину</a>
                </article>
                <? } ?>
            </section>
        </div>

        <section class="quick-links">
            <article style="background-image: url(/web/images/2.jpg)">
                <a href="#" class="table">
                    <div class="cell">
                        <div class="text">
                            <h4>Gift card</h4>
                            <hr>
                            <h3>Подарочная карта</h3>
                        </div>
                    </div>
                </a>
            </article>
            <article class="red" style="background-image: url(/web/images/3.jpg)">
                <a href="#" class="table">
                    <div class="cell">
                        <div class="text">
                            <h4>Gift card</h4>
                            <hr>
                            <h3>Подарочная</h3>
                            <h3>карта</h3>
                        </div>
                    </div>
                </a>
            </article>
            <article style="background-image: url(/web/images/4.jpg)">
                <a href="#" class="table">
                    <div class="cell">
                        <div class="text">
                            <h4>Gift card</h4>
                            <hr>
                            <h3>Подарочная карта</h3>
                        </div>
                    </div>
                </a>
            </article>
        </section>

    </div>
</div>