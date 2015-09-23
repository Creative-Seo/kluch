<?php $root='../../';
include($root."blocks/meta.php");
include($root."blocks/header.php");
include($root."blocks/breadcrumbs.php");?>

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

<?php include($root."blocks/footer.php"); ?>