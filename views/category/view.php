<?php
use app\models\Lesson;
use yii\helpers\Url;
/* @var $lessons app\models\Lesson */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead align="center">
                        <tr>
                            <th scope="col">№</th>
                            <th align="left" scope="col">Наименование</th>
                            <th scope="col">Картинка</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                    <?php foreach ($lessons as $lesson):?>
                    <tr>
                        <th scope="row"><?=$lesson->id?></th>
                        <td align="left"><?=$lesson->title?></td>
                        <?php
                        $model = Lesson::findOne($lesson->id);
                        $image = $model->getImage();
                        ?>
                        <td> <img src="<?=$image->getUrl()?>" height="100" width="200" alt=""></td>
                        <td> <p><a class="btn btn-outline-dark " href="<?=Url::to(['lesson/view','id'=>$lesson->id])?>">Перейти к уроку &raquo;</a></p></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>