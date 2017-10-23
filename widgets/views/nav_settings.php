<?php

use yii\helpers\Url;

?>


<div class="left-sidebar">
    <ul class="list-group">
        <li class="list-group-item"><a href="<?= Url::to(['/settings/default/index']) ?>">Головна</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/settings/users/index']) ?>">Додати користувача</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/settings/language/index']) ?>">Мультимовність</a></li>
    </ul>
</div>