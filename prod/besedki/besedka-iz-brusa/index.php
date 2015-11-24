<?php $title = 'Беседка из бруса от производителя по доступной цене во Владимире';
$description = '';
$keywords = '';
$breadcrumb2 = 'Беседки';
$breadcrumb2_url = '/besedki/';
$breadcrumb = 'Беседка из бруса';
$canonical = '/besedki/garmoniya/';

$lang=json_decode('{
  "h1":"Беседка из бруса",
  "h2":"Примеры беседок из бруса",
  "about":"<p>Мы строим беседки из бруса под ключ : от фундамента до кровли. Для расчёта стоимости нам необходимо знать размер беседки, тип фундамента, тип кровли, место установки.</p><p>Выбор проектов беседок из бруса очень велик, предлагаем несколько вариантов на наше усмотрение, если же у Вас есть свой проект, присылайте, посчитаем.</p>",
  "alt":"Беседка из бруса",
  "img":"besedka-iz-brusa",
  "eche":["skazka","leto","besedka-iz-brusa","garmoniya"]
}',true);
$pricebd = [["","договорная"]];
$harakt = [["Размер беседки",""],["Срок постройки","30 дней"]];
$gallery2 = [["besedka-s-pechkoy","беседка с печкой"],["besedka-s-pechkoy2","беседка с печкой"],["besedka-srub-iz-brevna","Беседка сруб из оцилиндрованного бревна"],["besedka-srub","Беседка сруб"]];

include("../template.php"); ?>


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
    <?php include($root."blocks/block-proekt.php"); ?>
    
     <!--col-md-6-->
    <?php include("../../besedki/leto/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
     <!--col-md-6-->
    <?php include("../../besedki/srub/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
 
    <!--col-md-6--> 
    <!--col-md-6-->
    <?php include("../../besedki/besedka-iz-brusa/param.php"); ?>
    <?php include($root."blocks/block-proekt.php"); ?>
    
  </div><!--row-->
</div><!--container-->
<?php include($root."blocks/footer.php"); ?>
