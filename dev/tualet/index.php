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

<?php $title = 'Туалет для дачи деревянный во Владимире купить дешево'; ?>
<?php $description = 'Деревянные туалеты для от производителя по доступной цене. Быстро, качественно и недорого. Собственное производство. Поможем с выбором.'; ?>
<?php $keywords = 'туалет для дачи, купить туалет для дачи, недорогой туалет для дачи'; ?>
<?php $breadcrumb = 'Туалеты'; ?>
<?php $canonical = '/tualet/'; ?>
<?php $root = '../';include($root."blocks/meta.php");
include($root."blocks/header.php");

include($root."blocks/breadcrumbs.php"); ?>

<div class="container">
  <h1>Туалеты для дачи и сада</h1>
  <div class="row">

 <div class="col-md-3">
    <p>Туалет Шалаш 12500 р.</p><a class="fancybox-thumb" rel="gallery1" href="/tualet/1_2.jpg"><img src="/tualet/1_2.jpg" class="img-responsive" alt=""/></a>
    </div>
    <div class="col-md-3">
    <p>Туалет Садовый 9500 р.</p><a class="fancybox-thumb" rel="gallery1" href="/tualet/2_2.jpg"><img src="/tualet/2_2.jpg" class="img-responsive" alt=""/></a>
    </div> 
    <div class="col-md-3">
    <p>Туалет Мечта 11500 р.</p><a class="fancybox-thumb" rel="gallery1" href="/tualet/3_2.jpg"><img src="/tualet/3_2.jpg" class="img-responsive" alt=""/></a>
    </div>
    
   
    
  </div><!--row-->
</div><!--container-->

<?php include($root."blocks/footer.php"); ?>