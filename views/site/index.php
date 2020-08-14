<?php
/* @var $this yii\web\View */
/* @var $timetable app\models\Timetable */
$this->title = 'My Yii Application';
?>
<?php
//    debug($timetable);
//    echo count($timetable->category);
//    debug($timetable);



?>

<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead align="center">
                    <tr>
                        <th align="left" scope="col">Дата и время</th>
                        <th scope="col">Учебный предмет</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Перейти к уроку</th>
                        <th scope="col">Форма урока</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                    <?php foreach ($timetable as $item):?>
                        <tr>
                            <td><?=$item->datatime?></td>
                            <?php foreach ($item->category as $itemName):?>
                            <td><?=$itemName->name?></td>
                            <?php endforeach;?>
                            <?php foreach ($item->lesson as $itemName):?>
                                <td><?=$itemName->title?></td>
                            <?php endforeach;?>

                            <td><?=$item->name?></td>
                            <td><?=$item->url?></td>

                            <td><?=$item->typelesson_id?></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
