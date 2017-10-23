<?php

use yii\helpers\Url;

?>


<div class="left-sidebar">
    <ul class="list-group">
        <li class="list-group-item"><a href="<?= Url::to(['/blog/default/index']) ?>">Головна</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/blog/articles_tags/create']) ?>">Додати тег до блогу</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/blog/articles/create']) ?>">Додати статтю до блогу</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/blog/articles_comments/index']) ?>">Модерація коментрів</a></li>
    </ul>
</div>