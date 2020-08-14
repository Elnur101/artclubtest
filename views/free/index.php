<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Url;
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Уроки</h2>
                <ul class="catalog list-group">
                    <?php foreach($frees as $free):?>
                        <a href="<?=Url::to(['/free/view','id'=>$free->id])?>"><li class="list-group-item"><?=$free->name?></li></a>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="col-lg-8">
                <h2></h2>
                <p></p>
                <p><a class="btn btn-default" href="#"></a></p>
            </div>
        </div>

    </div>
</div>