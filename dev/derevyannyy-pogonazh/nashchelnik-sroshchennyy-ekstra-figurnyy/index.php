<?php
$id="nashchelnik-sroshchennyy-ekstra-figurnyy";
$breadcrumb = 'Нащельник срощенный фигурный';
$content='';
$eche = [
"zagotovka-reyki-podramnika",
"korobochnyy-brus-pod-ukutku-2-sort",
"nashchelnik-sroshchennyy-ekstra",
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