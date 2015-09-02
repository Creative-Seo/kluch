<?php $meta_container = '<link rel="stylesheet" href="/css/jquery.fancybox.css"><link rel="stylesheet" href="/js/helpers/jquery.fancybox-thumbs.css">'; ?>
<?php $footer_block = '<script src="/js/jquery.fancybox.js"></script><script src="/js/jquery.mousewheel-3.0.6.pack.js"></script><script src="/js/helpers/jquery.fancybox-thumbs.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: \'none\',
		nextEffect	: \'none\',
		showNavArrows : \'true\',
		helpers	: {
			title	: {
				type: \'outside\'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});
</script>

'; ?>
<?php $title = 'Акции - Специальные предложения на строительство домов'; ?>
<?php $description = 'Скидки и акции на пиломатериалы и строительство деревянных домов от компании Ключ 585 во Владимире'; ?>
<?php $keywords = 'акции,скидки,спецпредложения'; ?>
<?php $breadcrumb = 'Акции'; ?>
<?php $canonical = '/aktsii/'; ?>
<?php include("../blocks/meta.php"); ?>
<?php include("../blocks/header.php"); ?>
<?php include("../blocks/breadcrumbs.php"); ?>

<div class="container">
    <h1>Акции</h1>
    <p>Для посетителей нашего сайта мы предлагаем специальные акции.</p>
	
	<h3>Подарок на выбор</h3>
    <p>При заказе строительства дачного дома или деревянного дома мы дарим подарки на выбор:</p>
    <ul>
      <ul>&mdash;&nbsp;кровать из натурального дерева;</ul>
      <ul>&mdash;&nbsp;набор табуретов;</ul>
      <ul>&mdash;&nbsp;стол со скамьями;</ul>
      <ul>&mdash;&nbsp;туалет;</ul>
      <ul>&mdash;&nbsp;хозблок;</ul>
      <ul>&mdash;&nbsp;беседка;</ul>
    </ul>
  <div class="row">
    <div class="col-md-4">
    <a class="fancybox-thumb" rel="gallery1" href="/aktsii/besedka.jpg"><img src="/aktsii/besedka.jpg" class="img-responsive" alt=""/></a>
    </div>
    <div class="col-md-4">
    <a class="fancybox-thumb" rel="gallery1" href="/aktsii/krovat1.jpg"><img src="/aktsii/krovat1.jpg" class="img-responsive" alt=""/></a>
    </div> 
  </div>
</div>    

<?php include("../blocks/footer.php"); ?>