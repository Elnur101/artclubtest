<?php
$images = $lessons->getImages();



?>
<div class="body-content">
    <div class="row">
        <div class="col-lg-12">
            <h2></h2>

            <p></p>
            <?php foreach($images as $img):?>
            <?=\yii\helpers\Html::img($img->getUrl())?>
            <?php endforeach;?>


        </div>

    </div>

</div>
