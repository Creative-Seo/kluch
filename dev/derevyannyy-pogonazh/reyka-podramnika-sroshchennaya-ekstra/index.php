<?php
$id="reyka-podramnika-sroshchennaya-ekstra";
$breadcrumb = 'Рейка подрамника';
$content='';
$eche = [
"zagotovka-reyki-podramnika",
"ugolok-sroshchennyy-ekstra",
"nashchelnik-sroshchennyy-ekstra",
"nashchelnik-sroshchennyy-ekstra-figurnyy"
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