<?php $title = 'Карта'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb = 'Карта'; ?>
<?php $canonical = 'http://www.kluch585.ru/map/'; ?>
<?php $footer_block = ' <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script><script src="http://www.kluch585.ru/js/map.js"></script>'; ?>
<?php include("../blocks/meta.php"); ?>
<?php include("../blocks/header.php"); ?>
<?php include("../blocks/breadcrumbs.php"); ?>
<div class="container">
<div class="row">
<div class="content">
  <div class="text clearfix">
    <h1 data-page="20">Карта построенных объектов</h1>
    <div id="map" style="width:auto;height:550px;"></div>
  </div>
</div>
<?php include("../blocks/footer.php"); ?>