<?php
$lang=json_decode('{
	"h1":"Нащельник срощенный ЭКСТРА оптом",
	"alt":"Нащельник срощенный ЭКСТРА",
	"img1":"1-01.png",
	"img2":"р1-01.png",
	"cena":[["Размер,мм","Оптовая цена,<br>руб./м.п."],["6*34*2100","6"],["6*40*2100","8,7"],["8*40*2500","8,8"]],
	"p":"Деревянный нащельник, он же раскладка, используется для прикрытия щелей и стыков между досками панелями и тд. Представляет собой узкую рейку из обработанного сухого дерева. Эта нехитрая деталь позволяет придать эстэтичный вид любым поверхностям. Простота монтажа  и небольшая стоимость сделали этот вид погонажа популярным при отделке загородных домов и дач."
}',true);
$eche = [
["korobochnyy-brus-sroshchennyy-ekstra","korobochnyy-brus","Коробочный брус, срощенный ЭКСТРА"],
["korobochnyy-brus-pod-ukutku-2-sort","korobochnyy-brus","Коробочный брус под укутку, 2 сорт"],
["nashchelnik-sroshchennyy-ekstra-figurnyy","nashchelnik-sroshchennyy-ekstra-figurnyy","Нащельник срощенный ЭКСТРА, фигурный"],
["reyka-podramnika-sroshchennaya-ekstra","reyka-dlya-podramnika","Рейка подрамника (для картин, фото) срощенная ЭКСТРА"]
];

$title = $lang['h1'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Нащельник срощенный';
$canonical = '/derevyannyy-pogonazh/nashchelnik-sroshchennyy-ekstra/';

include('../template.php');
?>
