<?php
$lang=json_decode('{
	"h1":"Уголок срощенный ЭКСТРА оптом",
	"alt":"Уголок срощенный ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["20*20*2500","16"],["25*25*2500","17"],["30*30*2500","19"],["40*40*2500","23"]],
	"p":"Уголок незаменим для декоративной отделки наружных углов стен,оконных обрамлений , косяков, различных настилов и свесов. Изготавливается различных размеров и с его помощью есть возможность закрыть самые нестандартные углы. Хорошо сочетается с различными видами поверхностей, придавая им законченность. Может крепиться как традиционными методами- гвоздями и скобами, так и на клей."
}',true);
$eche = [
["zagotovka-reyki-podramnika","reyka-dlya-podramnika","Заготовка рейки подрамника"],
["reyka-podramnika-sroshchennaya-ekstra","reyka-dlya-podramnika","Рейка подрамника (для картин, фото) срощенная ЭКСТРА"],
["plintus-sroshchennyy-ekstra","plintus-sroshchennyy-ekstra","Плинтус срощенный ЭКСТРА"],
["plintus-potolochnyy-ekstra","plintus-potolochnyy-sroshchennyy-ekstra","Плинтус потолочный, срощенный ЭКСТРА"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Уголок срощенный';
$canonical = '/derevyannyy-pogonazh/ugolok-sroshchennyy-ekstra/';

include('../template.php');
?>
