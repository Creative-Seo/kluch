<?php
$id="plintus-potolochnyy-ekstra";
$breadcrumb = 'Плинтус потолочный';
$content='Потолочный плинтус, так же называемый иногда галтель, применяется для прикрытия зазора между стенами и потолком. Это изделие имеет не только функциональное значение но и декорирует пространство. С его помощью просто скрыть дефекты стен, придать помещению элегантный вид. Производится из сухой хвойной древесины, экологичен, долговечен.';
$eche = [
"ugolok-sroshchennyy-ekstra",
"plintus-sroshchennyy-ekstra",
"uglovaya-raskladka-figurnaya-ekstra",
"korobochnyy-brus-sroshchennyy-ekstra"
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