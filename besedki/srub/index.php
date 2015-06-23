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
<?php $title = 'Беседка Сруб от производителя по доступной цене во Владимире'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb2 = 'Беседки'; ?>
<?php $breadcrumb2_url = 'http://www.kluch585.ru/besedki/'; ?>
<?php $breadcrumb = 'Беседка Сруб'; ?>
<?php $canonical = 'http://www.kluch585.ru/besedki/srub/'; ?>
<?php include("../../blocks/meta.php"); ?>
<?php include("../../blocks/header.php"); ?>
<?php include("../../blocks/breadcrumbs.php"); ?>
<div class="container proekt-style">
  <div class="row">
    <h1>Беседка Сруб</h1>
    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="padding:0"> 
       </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
    <a class="fancybox-thumb" rel="gallery1" href="http://www.kluch585.ru/besedki/srub/srub.jpg"><img src="http://www.kluch585.ru/besedki/srub/srub.jpg" class="img-responsive" alt="Беседка Сруб"/></a>
    <!--gallery-->  

   </div>
    
    

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="row">
       
        <div class="cena-block"> <span class="price-proekt2">Стоимость строительства:</span> <span class="price-proekt3">32000 </span>руб.<br>
          <button type="submit" class="button-style open-modal">Оставить заявку</button>
     <?php include("../../blocks/modal-zakaz.php"); ?>     
     
            
            
          </div>
		  
          <div class="modal-footer modal-otpr">
            
            <a class="" href="#">Отправить</a>
          </div>
		  
        </div>
      </div>
    </div>
       <!-- Modal Contents --> 
        <div class="opisanie table-responsive">
           <table class="table">
              <caption>Основные характеристики</caption>
              <tbody>
                <tr>
                  <th scope="row">Размер беседки:</th>
                  <td>2x2 м</td>
                </tr>
                <tr>
                  <th scope="row">Срок постройки:</th>
                  <td>30 дней</td>
                </tr>
               
              </tbody>
           </table>  
        </div>
        </div><!--cena-block-->
   
      </div><!--row-->
    </div><!--col-md-4-->
  </div><!--row-->
</div><!--container--> 

<div class="container">
  <div class="row"> 
    
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">  
     <div class="opisanie table-responsive">
     <div><h2>Описание</h2></div>
        <p>В стоимость входит:  Беседка. Кровля (обрешетка  –  четв. доска, тип кровли –  мягкая черепица).<p>
        <p>Можно доп. заказать: монтаж беседки, устройство основания, окраска, стол, лавочки.</p>
        </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-xs">
        <h2>Беседки построенные по проекту</h2>
        
        <div class="gallery2">
    
    <a class="fancybox-thumb2" rel="gallery1" href="http://www.kluch585.ru/besedki/srub/besedka-srub.jpg"><img src="http://www.kluch585.ru/besedki/srub/besedka-srub.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a> 
    </div>
        
     </div>   
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title"><span>Похожие проекты</span></div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border2"></div>
<!--col-md-6-->
    <?php include("../../besedki/skazka/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
    
     <!--col-md-6-->
    <?php include("../../besedki/borovik/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
     <!--col-md-6-->
    <?php include("../../besedki/ramina/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
 
    <!--col-md-6--> 
    <!--col-md-6-->
    <?php include("../../besedki/garmoniya/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
  
    <!--col-md-6-->
    
  </div><!--row-->
</div><!--container-->
<?php include("../../blocks/footer.php"); ?>
