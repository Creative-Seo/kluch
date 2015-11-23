<?php
$lang=json_decode('{
	"h1":"Рейка подрамника (для картин, фото) срощенная ЭКСТРА оптом",
	"alt":"рейка для подрамника ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["8*40*2500","27"],["8*50*2500","33"]],
	"p":""
}',true);
$eche = [
["zagotovka-reyki-podramnika","reyka-dlya-podramnika","Заготовка рейки подрамника"],
["ugolok-sroshchennyy-ekstra","ugolok-derevyannyy-sroshchennyy-ekstra","Уголок срощенный ЭКСТРА"],
["nashchelnik-sroshchennyy-ekstra","nashchelnik-sroshchennyy-ekstra","Нащельник срощенный ЭКСТРА"],
["nashchelnik-sroshchennyy-ekstra-figurnyy","nashchelnik-sroshchennyy-ekstra-figurnyy","Нащельник срощенный ЭКСТРА, фигурный"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Рейка подрамника';
$canonical = '/derevyannyy-pogonazh/reyka-podramnika-sroshchennaya-ekstra/';

include('../template.php');
?>
