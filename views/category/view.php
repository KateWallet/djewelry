<? use yii\helpers\Url; ?>
<div class="container">
    <?= \app\widgets\MenuWidget::widget() ?>
</div>

<div id="breadcrumbs">
    <div class="container">
        <ul>

            <li><a href="/">На главную</a></li>
<!--            <li>--><?//= $good['category'] ?><!--</li>-->
        </ul>
    </div>
    <!-- / container -->
</div>
<!-- / body -->

<div id="body">
    <div class="container">

        <div id="content">
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

    </div>
</div>