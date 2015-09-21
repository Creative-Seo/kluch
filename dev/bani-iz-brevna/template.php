<?php 
$root = "../../";
include($root."/blocks/meta.php");
include($root."/blocks/header.php");
include($root."/blocks/breadcrumbs.php");
?>

<div class="container proekt-style">
  <div class="row">
    <h1><?php echo $lang['h1'];?></h1>
    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="padding:0"> 
    <div class="gallery">
      <a class="fancybox-thumb" rel="gallery1" href="<?php echo $lang['id'];?>-1.jpg"><img src="<?php echo $lang['id'];?>-1.jpg" width="150" class="img-responsive" alt="<?php echo $lang['alt'];?>"/></a>
   </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
      <a class="fancybox-thumb" rel="gallery1" href="<?php echo $lang['id'];?>.jpg"><img src="<?php echo $lang['id'];?>.jpg" class="img-responsive" alt="<?php echo $lang['alt'];?>"/></a>
    <!--gallery-->  
      <div class="gallery2 visible-sm visible-xs">
        <a class="fancybox-thumb" rel="gallery1" href="<?php echo $lang['id'];?>-1.jpg"><img src="<?php echo $lang['id'];?>-1.jpg" width="150" class="img-responsive" alt="<?php echo $lang['alt'];?>"/></a>
     </div>
   </div>
  
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="row">
       
<?php echo $cena;?>
   
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
		<a class="fancybox-thumb2" rel="gallery1" href="<?php echo $lang['img'];?>.jpg"><img src="<?php echo $lang['img'];?>.jpg" width="150" class="img-responsive" alt="Планировка <?php echo $lang['alt'];?>"/></a>
   </div>
        
     </div>   
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title">
      <span>Похожие проекты</span>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border2"></div>
<?php foreach ($lang['eche'] as $row) { ?>
     <?php include("../../bani-iz-brevna/".$row."/param.php"); ?>
     <?php include($root."/blocks/block-proekt.php"); ?>
}?>

  </div><!--row-->
</div><!--container-->

<?php include($root."/blocks/footer.php"); ?>