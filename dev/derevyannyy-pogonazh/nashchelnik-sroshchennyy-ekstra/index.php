<?php
$id="nashchelnik-sroshchennyy-ekstra";
$breadcrumb = 'Нащельник срощенный';
$content='Деревянный нащельник, он же раскладка, используется для прикрытия щелей и стыков между досками панелями и тд. Представляет собой узкую рейку из обработанного сухого дерева. Эта нехитрая деталь позволяет придать эстэтичный вид любым поверхностям. Простота монтажа  и небольшая стоимость сделали этот вид погонажа популярным при отделке загородных домов и дач.';
$eche = [
"korobochnyy-brus-sroshchennyy-ekstra",
"korobochnyy-brus-pod-ukutku-2-sort",
"nashchelnik-sroshchennyy-ekstra-figurnyy",
"reyka-podramnika-sroshchennaya-ekstra"
];

include('../array.php');
$title = $pogonazh[$id]['name'].' от производителя с доставкой в Москве и по всей России';
$description = '';
$keywords = 'деревянный погонаж';
$breadcrumb2 = 'Погонаж';
$breadcrumb2_url = '/derevyannyy-pogonazh/';
$breadcrumb = 'Коробочный брус 2 сорт';
$canonical = '/derevyannyy-pogonazh/'.$id.'/';
include('../template.php');
?>