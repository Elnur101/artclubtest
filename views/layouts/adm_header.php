<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;

NavBar::begin([
    'brandLabel' => 'ARTCLUB',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-expand-lg navbar-dark bg-danger shadow-lg',
    ],
]);
$menuItems = [
    ['label' => 'В главную', 'url' => ['/site/index']],
//        ['label' => 'Посты', 'url' => ['/admin/post']],
    ['label' => 'Начинающие', 'url' => ['/admin/free']],
    ['label' => 'Художественная школа', 'url' => ['/admin/lesson']],
    ['label' => 'Категории', 'url' => ['/admin/category']],
    ['label' => 'Блоки', 'url' => ['/admin/lesson']],
    ['label' => 'Пользователи', 'url' => ['/admin/user']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
} else {
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Выйти (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => $menuItems,
]);
NavBar::end();
?>
