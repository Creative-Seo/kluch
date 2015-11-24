<?php
$id="korobochnyy-brus-sroshchennyy-ekstra";
$breadcrumb = 'Коробочный брус, срощенный';
$content='Традиционно и широко применяется при монтаже внутренних и наружных дверей. Изготавливается из срощенной сухой хвойной древесины и обладает особой прочностью из-за отсутствия сучков и пороков. Как правило применяется с последующей обработкой защитными материалами.';
$eche = [
"plintus-potolochnyy-ekstra",
"korobochnyy-brus-pod-ukutku-2-sort",
"uglovaya-raskladka-figurnaya-ekstra",
"nashchelnik-sroshchennyy-ekstra"
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