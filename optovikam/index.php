<?php $meta_container = '<link rel="stylesheet" href="http://www.kluch585.ru/css/jquery.fancybox.css"><link rel="stylesheet" href="http://www.kluch585.ru/js/helpers/jquery.fancybox-thumbs.css">'; ?>
<?php $footer_block = '<script src="http://www.kluch585.ru/js/jquery.fancybox.js"></script><script src="http://www.kluch585.ru/js/jquery.mousewheel-3.0.6.pack.js"></script><script src="http://www.kluch585.ru/js/helpers/jquery.fancybox-thumbs.js"></script> 
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
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox-thumb2").fancybox({
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
<?php $title = 'Оптовикам - Компания Ключ 585'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb = 'Оптовикам'; ?>
<?php $canonical = 'http://www.kluch585.ru/optovikam/'; ?>
<?php include("../blocks/meta.php"); ?>
<?php include("../blocks/header.php"); ?>
<?php include("../blocks/breadcrumbs.php"); ?>

<div class="container">
  <div class="row">
    <h1>Для оптовых покупателей</h1>
    <p>Основным направлением нашей деятельности является производство погонажных изделий для 
отделки домов, бань, дачных домиков. Мы предлагаем выгодные условия сотрудничества для 
строительных магазинов, багетных мастерских, рынков, сетевых гипермаркетов.</p>
    <p>Чем мы отличаемся:</p>
    <ul> 
       <li>Широкий спектр отделочных пиломатериалов: деревянный уголок, плинтус, угловая
раскладка, нащельник, наличник, коробочный брус;</li>
       <li>Нами налажено производство высококачественной рейки подрамника для
художественных картин и фотографий;</li>
       <li>Выгодные цены;</li>
       <li>Отличное качество;</li>
       <li>Своевременные поставки;</li>
	   <li>Изготовление изделий на заказ.</li>
    </ul>
    <p>Чтобы подробно ознакомиться с ценами и условиями сотрудничества, направьте запрос на e-mail:
info@kluch585.ru с темой «опт заявка» или свяжитесь с нами по телефону: 89422 36-36-95
</p>
  </div>
 <div class="gallery2">
<?php 
$host = $_SERVER['HTTP_HOST'];
$self = explode("/", $_SERVER['PHP_SELF']);
define('HTTP_URL', 'http://'.$host.'/'.$self[1].'/img/');
$path = $_SERVER['DOCUMENT_ROOT'].'/'.$self[1].'/img/';
$images = scandir($path);
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
			<a class="fancybox-thumb2" rel="gallery1" href="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>">
			<img src="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>" width="200" class="img-responsive" alt=""/></a>
<?php }} ?>
</div>
</div>    

<?php include("../blocks/footer.php"); ?>