<?php
use app\models\Lesson;
use yii\helpers\Url;
/* @var $lessons app\models\Lesson */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-3">
                <!--                <h2>Уроки</h2>-->
                <!--                <ul class="catalog list-group">-->
                <!--                    --><?//=\app\components\MenuWidget::widget()?>
                <!--                </ul>-->
            </div>
            <?php foreach ($lessons as $lesson):?>
                <div class="col-md-4">
                    <h2><?=$lesson->title?></h2>
                    <h2><?php
                        $model = Lesson::findOne($lesson->id);
                        $image = $model->getImage();
                        ?>
                        <img src="<?=$image->getUrl()?>" height="200" alt="">

                    </h2>
                    <p><a class="btn btn-default" href="<?=Url::to(['lesson/view','id'=>$lesson->id])?>">Перейти к уроку &raquo;</a></p>
                </div>
            <?php endforeach;?>
        </div>

    </div>
</div>
