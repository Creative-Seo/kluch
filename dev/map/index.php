<?php $title = 'Карта'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb = 'Карта'; ?>
<?php $canonical = '/map/'; ?>
<?php $footer_block = ' <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script><script src="/js/map.js"></script>'; ?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");
include($root."blocks/breadcrumbs.php"); ?>
<div class="container">
<div class="row">
<div class="content">
  <div class="text clearfix">
    <h1 data-page="20">Карта построенных объектов</h1>
    <div id="map" style="width:auto;height:550px;"></div>
  </div>
</div>
<?php include($root."blocks/footer.php"); ?>