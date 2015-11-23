<?php
$lang=json_decode('{
	"h1":"Плинтус срощенный ЭКСТРА оптом",
	"alt":"Плинтус срощенный ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["12*45*2500","15"]],
	"p":"Плинтусом прикрывают щели между полом и стенами, бывает различным по рельефу и высоте. У него много достоинств – практичность, долговечность, да и смотрится он красиво в сочетании с доской пола из такого же материала."
}',true);
$eche = [
["zagotovka-reyki-podramnika","reyka-dlya-podramnika","Заготовка рейки подрамника"],
["ugolok-sroshchennyy-ekstra","ugolok-derevyannyy-sroshchennyy-ekstra","Уголок срощенный ЭКСТРА"],
["plintus-potolochnyy-ekstra","plintus-potolochnyy-sroshchennyy-ekstra","Плинтус потолочный, срощенный ЭКСТРА"],
["uglovaya-raskladka-figurnaya-ekstra","uglovaya-raskladka","Угловая раскладка,фигурная, срощенная ЭКСТРА"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Плинтус срощенный';
$canonical = '/derevyannyy-pogonazh/plintus-sroshchennyy-ekstra/';

include('../template.php');
?>
