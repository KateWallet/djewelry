<?php

use yii\helpers\Url;

?>

<nav id="menu">
        <div class="container">
                <div class="trigger"></div>
                <ul>
                    <? foreach ($data as $id) { ?>
                        <li><a href="<?= Url::to(['category/view', 'id' => $id['category_name']]) ?>"><?= $id['browser_name'] ?></a></li>
                    <? } ?>
                    </ul>
            </div>
        <!-- / container -->
    </nav>
<!-- / navigation -->