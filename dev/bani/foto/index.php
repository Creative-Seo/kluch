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
<?php $title = 'Фотографии бань построенных компанией Ключ 585'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb = 'Фото бань'; ?>
<?php $breadcrumb2 = 'Бани'; ?>
<?php $breadcrumb2_url = '/bani/'; ?>
<?php $canonical = '/bani/foto/'; ?>
<?php include("../../blocks/meta.php"); ?>
<?php include("../../blocks/header.php"); ?>
<?php include("../../blocks/breadcrumbs.php"); ?>

<div class="container">
  <div class="row">
    <h1>Фотографии бань построенных нашей компанией</h1>
    <div id="container" class="gallery foto-otchyot">
    
    <?php
$x=0;
while ($x++<43){ echo'
    <div class="grid">
<div class="imgholder image-thumb">
    <a class="fancybox-thumb" rel="gallery1" href="/bani/foto/banya-'; echo $x; echo '.jpg">
	<figure class=" animated zoomIn">	
	<img src="/bani/foto/banya-'; echo $x; echo '.jpg" class="img-responsive" alt="Баня - Ключ 585"/>
	</figure></a></div></div>
    ';}

?>
    
     
    </div>
  </div>
</div>    

<?php include("../../blocks/footer.php"); ?>