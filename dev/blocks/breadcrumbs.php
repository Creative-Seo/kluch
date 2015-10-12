<?php if (!(in_array($_SERVER['REQUEST_URI'], ['/derevyannyy-pogonazh/','/optovikam/','/aktsii/']))) {?>
<a class="pull-right col-sm-6 col-lg-5" href="/fundament/svayno-vintovoy/" style="text-decoration:none; background-color: #fff; margin: 10px; padding:5px; border: 1px solid #dd4041;">
	<img class="col-xs-4 img-responsive" src="/aktsii/bear.jpg" alt="Для тех, кто не спит зимой">
	<div class="col-xs-8">
		<p><span style="color: #dd4041;">Акция "Для тех, кто не спит зимой!"</span><br>При заказе на зимнее строительство свайно-винтовой фундамент в подарок!</p>
		<p>Акция действует до 11.11.2015 года.</p>
	</div>
</a>
<?php } ?>
<!--Breadcrumbs-->
<div class="container">
  <div class="row">
    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span>
        <span class="divider"> &#8594; </span>
<?php 
  if(isset($breadcrumb2)) 
  { 
     echo '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'; echo $breadcrumb2_url; echo '" itemprop="url"><span itemprop="title">'; echo $breadcrumb2; echo '</span></a></span>';
	 echo '<span class="divider"> &#8594; </span>';
  } 
?>      
        <span class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo $_SERVER['REQUEST_URI'];?>" itemprop="url"><span itemprop="title"><?php echo $breadcrumb;?></span></a></span>
      </div>
    </div>
  </div>
</div>
<!--Breadcrumbs-->