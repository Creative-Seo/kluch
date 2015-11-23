<?php
$lang=json_decode('{
	"h1":"Заготовка рейки подрамника оптом",
	"alt":"рейка для подрамника ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["20*40*2500","23"]],
	"p":"Этот элемент незаменим для декорирования внутренних углов помещений, производства садовой мебели. Позволяет скрыть дефекты поверхностей, стыки облицовочных материалов, придавая элементам законченность. Изготавливается из безсучковой древесины хвойных пород высушенной в специальном режиме. Имеет идеальную поверхность и не требует дополнительной обработки при подготовке к  тонированию или окраске."
}',true);
$eche = [
["plintus-sroshchennyy-ekstra","plintus-sroshchennyy-ekstra","Плинтус срощенный ЭКСТРА"],
["nashchelnik-sroshchennyy-ekstra-figurnyy","nashchelnik-sroshchennyy-ekstra-figurnyy","Нащельник срощенный ЭКСТРА, фигурный"],
["reyka-podramnika-sroshchennaya-ekstra","reyka-dlya-podramnika","Рейка подрамника (для картин, фото) срощенная ЭКСТРА"],
["ugolok-sroshchennyy-ekstra","ugolok-derevyannyy-sroshchennyy-ekstra","Уголок срощенный ЭКСТРА"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Заготовка рейки подрамника';
$canonical = '/derevyannyy-pogonazh/zagotovka-reyki-podramnika/';

include('../template.php');
?>
