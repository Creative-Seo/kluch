<?php $title = 'Беседка из бруса от производителя по доступной цене во Владимире'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php $breadcrumb2 = 'Беседки'; ?>
<?php $breadcrumb2_url = '/besedki/'; ?>
<?php $breadcrumb = 'Беседка из бруса'; ?>
<?php $canonical = '/besedki/garmoniya/'; ?>
<?php include("../../blocks/meta.php"); ?>
<?php include("../../blocks/header.php"); ?>
<?php include("../../blocks/breadcrumbs.php"); ?>
<div class="container proekt-style">
  <div class="row">
    <h1>Беседка из бруса</h1>
    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs" style="padding:0"> 
       </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12"> 
    <a class="fancybox-thumb" rel="gallery1" href="/besedki/besedka-iz-brusa/besedka-iz-brusa.jpg">
		<img src="/besedki/besedka-iz-brusa/besedka-iz-brusa.jpg" class="img-responsive" alt="Беседка из бруса"/></a>
    <!--gallery-->  

   </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="row">
       
        <div class="cena-block"> <span class="price-proekt2">Стоимость строительства:</span> <span class="price-proekt3">договорная </span><br>
          <button type="submit" class="button-style open-modal">Оставить заявку</button>
<?php include("../../blocks/modal-zakaz.php"); ?>     
        <div class="opisanie table-responsive">
           <table class="table">
              <caption>Основные характеристики</caption>
              <tbody>
                <tr>
                  <th scope="row">Размер беседки:</th>
                  <td></td>
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
		<p>Мы строим беседки из бруса под ключ : от фундамента до кровли. Для расчёта стоимости нам необходимо знать размер беседки, тип фундамента, тип кровли, место установки.</p>
		<p>Выбор проектов беседок из бруса очень велик, предлагаем несколько вариантов на наше усмотрение, если же у Вас есть свой проект, присылайте, посчитаем.</p>
        </div>
     </div>
     
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-xs">
        <h2>Примеры беседок из бруса</h2>
        
         <div class="gallery2">
<?php for ($i=1;$i<=17;$i++) { ?>
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/besedka-iz-brusa/besedka-iz-brusa<?php echo $i;?>.jpg" title="Беседка из бруса <?php echo $i;?>">
	<img src="/besedki/besedka-iz-brusa/besedka-iz-brusa<?php echo $i;?>.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a>
<?php } ?>
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/besedka-iz-brusa/besedka-dlya-sada.jpg" title="Беседка для сада">
		<img src="/besedki/besedka-iz-brusa/besedka-dlya-sada.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a>
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/besedka-iz-brusa/besedka-gril.jpg" title="Беседка гриль">
		<img src="/besedki/besedka-iz-brusa/besedka-gril.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a>
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/besedka-iz-brusa/besedka-romantika.jpg" title="Беседка Романтика">
		<img src="/besedki/besedka-iz-brusa/besedka-romantika.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a>
    <a class="fancybox-thumb2" rel="gallery1" href="/besedki/besedka-iz-brusa/besedka-s-kuhney.jpg" title="Беседка с кухней">
		<img src="/besedki/besedka-iz-brusa/besedka-s-kuhney.jpg" width="150" class="img-responsive" alt="<?php echo $title; ?>"/></a>
       </div>
        
        
     </div>   
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title"><span>Похожие беседки</span></div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border2"></div>
 <?php include("../../besedki/skazka/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
    
     <!--col-md-6-->
    <?php include("../../besedki/leto/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
     <!--col-md-6-->
    <?php include("../../besedki/srub/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
 
    <!--col-md-6--> 
    <!--col-md-6-->
    <?php include("../../besedki/besedka-iz-brusa/param.php"); ?>
    <?php include("../../blocks/block-proekt.php"); ?>
    
  </div><!--row-->
</div><!--container-->
<?php include("../../blocks/footer.php"); ?>
