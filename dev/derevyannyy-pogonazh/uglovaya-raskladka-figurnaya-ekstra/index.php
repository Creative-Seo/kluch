<?php
$lang=json_decode('{
	"h1":"Угловая раскладка,фигурная, срощенная ЭКСТРА оптом",
	"alt":"Угловая раскладка,фигурная, срощенная ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["14*14*2500","9"],["19*19*2500","11"]],
	"p":"Этот элемент незаменим для декорирования внутренних углов помещений, производства садовой мебели. Позволяет скрыть дефекты поверхностей, стыки облицовочных материалов, придавая элементам законченность. Изготавливается из безсучковой древесины хвойных пород высушенной в специальном режиме. Имеет идеальную поверхность и не требует дополнительной обработки при подготовке к  тонированию или окраске."
}',true);
$eche = [
["plintus-sroshchennyy-ekstra","plintus-sroshchennyy-ekstra","Плинтус срощенный ЭКСТРА"],
["plintus-potolochnyy-ekstra","plintus-potolochnyy-sroshchennyy-ekstra","Плинтус потолочный, срощенный ЭКСТРА"],
["korobochnyy-brus-sroshchennyy-ekstra","korobochnyy-brus","Коробочный брус, срощенный ЭКСТРА"],
["korobochnyy-brus-pod-ukutku-2-sort","korobochnyy-brus","Коробочный брус под укутку, 2 сорт"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Угловая раскладка,фигурная';
$canonical = '/derevyannyy-pogonazh/uglovaya-raskladka-figurnaya-ekstra/';

include('../template.php');
?>
