<?php
$id="zagotovka-reyki-podramnika";
$breadcrumb = 'Заготовка рейки подрамника';
$content='Этот элемент незаменим для декорирования внутренних углов помещений, производства садовой мебели. Позволяет скрыть дефекты поверхностей, стыки облицовочных материалов, придавая элементам законченность. Изготавливается из безсучковой древесины хвойных пород высушенной в специальном режиме. Имеет идеальную поверхность и не требует дополнительной обработки при подготовке к  тонированию или окраске.';
$eche = [
"plintus-sroshchennyy-ekstra",
"nashchelnik-sroshchennyy-ekstra-figurnyy",
"reyka-podramnika-sroshchennaya-ekstra",
"ugolok-sroshchennyy-ekstra"
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