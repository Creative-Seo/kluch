<?php
$lang=json_decode('{
	"h1":"Коробочный брус под укутку, 2 сорт оптом",
	"alt":"Коробочный брус 2 сорт ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["35*70*2100","35"]]
}',true);
$eche = [
["uglovaya-raskladka-figurnaya-ekstra","uglovaya-raskladka","Угловая раскладка,фигурная, срощенная ЭКСТРА"],
["korobochnyy-brus-sroshchennyy-ekstra","korobochnyy-brus","Коробочный брус, срощенный ЭКСТРА"],
["nashchelnik-sroshchennyy-ekstra","nashchelnik-sroshchennyy-ekstra","Нащельник срощенный ЭКСТРА"],
["nashchelnik-sroshchennyy-ekstra-figurnyy","nashchelnik-sroshchennyy-ekstra-figurnyy","Нащельник срощенный ЭКСТРА, фигурный"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Коробочный брус 2 сорт';
$canonical = '/derevyannyy-pogonazh/korobochnyy-brus-pod-ukutku-2-sort/';

include('../template.php');
?>