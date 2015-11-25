<?php $root = "../../";
include($root."blocks/meta.php");
include($root."blocks/header.php");
include($root."blocks/breadcrumbs.php");?>

<div class="container proekt-style">
  <div class="row">
    <h1><?php echo $lang['h1'];?></h1>
    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="padding:0"> 
    <div class="gallery">
      <a class="fancybox-thumb" rel="gallery1" href="<?php echo $lang['img'];?>-1.jpg"><img src="<?php echo $lang['img'];?>-1.jpg" width="150" class="img-responsive" alt="<?php echo $lang['alt'];?>"/></a>
   </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
      <a class="fancybox-thumb" rel="gallery1" href="<?php echo $lang['img'];?>.jpg"><img src="<?php echo $lang['img'];?>.jpg" class="img-responsive" alt="<?php echo $lang['alt'];?>"/></a>
    <!--gallery-->  
      <div class="gallery2 visible-sm visible-xs">
        <a class="fancybox-thumb" rel="gallery1" href="<?php echo $lang['img'];?>-1.jpg"><img src="<?php echo $lang['img'];?>-1.jpg" width="150" class="img-responsive" alt="<?php echo $lang['alt'];?>"/></a>
     </div>
   </div>
  
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="row">
       
        <div class="cena-block"><span class="price-proekt2">Стоимость строительства:</span><br>
          <div class="row">
<?php foreach ($pricebd as $row) { ?>
          <div class="col-xs-7 col-sm-12 price-proekt4"><?php echo $row[0];?></div>
          <div class="col-xs-5 col-sm-12"><nobr><span class="price-proekt5"><?php echo $row[1];?>&nbsp;</span>руб.</nobr></div>
<?php } ?>
          </div>
          <button type="submit" class="button-style open-modal">Оставить заявку</button>
          <div class="opisanie table-responsive">
           <table class="table">
              <caption>Основные характеристики</caption>
              <tbody>
<?php foreach ($harakt as $row) { ?>
                <tr>
                  <th scope="row"><?php echo $row[0];?>:</th>
                  <td><?php echo $row[1];?></td>
                </tr>
<?php } ?>
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
<?php echo $lang['about'];?>
        </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-xs">
        <h2>Планировка</h2>
        
    <div class="gallery2">
		<a class="fancybox-thumb2" rel="gallery1" href="<?php echo $lang['img'];?>.jpg"><img src="<?php echo $lang['img'];?>-planirovka.jpg" width="150" class="img-responsive" alt="Планировка <?php echo $lang['alt'];?>"/></a>
   </div>
        
     </div>   
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title">
      <span>Похожие проекты</span>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border2"></div>
<?php foreach ($lang['eche'] as $row) {
  include("../".$row."/param.php");
  include($root."blocks/block-proekt.php");
} ?>

  </div><!--row-->
</div><!--container-->

<?php include($root."blocks/footer.php"); ?>