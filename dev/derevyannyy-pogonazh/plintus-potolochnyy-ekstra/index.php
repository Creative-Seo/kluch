<?php
$lang=json_decode('{
	"h1":"Плинтус потолочный, срощенный ЭКСТРА отпом",
	"alt":"Плинтус срощенный ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["12*25*2500","9,7"]],
	"p":"Потолочный плинтус, так же называемый иногда галтель, применяется для прикрытия зазора между стенами и потолком. Это изделие имеет не только функциональное значение но и декорирует пространство. С его помощью просто скрыть дефекты стен, придать помещению элегантный вид. Производится из сухой хвойной древесины, экологичен, долговечен."
}',true);
$eche = [
["ugolok-sroshchennyy-ekstra","ugolok-derevyannyy-sroshchennyy-ekstra","Уголок срощенный ЭКСТРА"],
["plintus-sroshchennyy-ekstra","plintus-sroshchennyy-ekstra","Плинтус срощенный ЭКСТРА"],
["uglovaya-raskladka-figurnaya-ekstra","uglovaya-raskladka","Угловая раскладка,фигурная, срощенная ЭКСТРА"],
["korobochnyy-brus-sroshchennyy-ekstra","korobochnyy-brus","Коробочный брус, срощенный ЭКСТРА"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Плинтус потолочный';
$canonical = '/derevyannyy-pogonazh/plintus-potolochnyy-ekstra/';

include('../template.php');
?>
