<?php

use yii\helpers\Url;

?>


<div class="left-sidebar">
    <ul class="list-group">
        <li class="list-group-item"><a href="<?= Url::to(['/admin/default/index']) ?>">Головна</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/admin/project/index']) ?>">Заявки розробки проектів</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/admin/portfolio_tags/create']) ?>">Додати тег до портфоліо</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/admin/portfolio/create']) ?>">Додати роботу в портфоліо</a></li>
        <li class="list-group-item"><a href="<?= Url::to(['/admin/team/create']) ?>">Додати нового працівника</a></li>
    </ul>
</div>