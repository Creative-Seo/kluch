<?php if (!(in_array($_SERVER['REQUEST_URI'], ['/derevyannyy-pogonazh/','/optovikam/']))) {?>
<a class="pull-right col-sm-6" href="http://www.kluch585.ru/dachnyie-domiki/dom-8/" style="text-decoration:none; background-color: #fff; margin: 10px; padding:5px; border: 1px solid #dd4041;">
	<img class="col-xs-4 img-responsive" src="http://www.kluch585.ru/dachnyie-domiki/dom-8/1.jpg">
	<p class="col-xs-8"><span style="color: #dd4041;">Выгодное СПЕЦПРЕДЛОЖЕНИЕ</span> - Дачный дом №8  6х4м с мансардой и верандой с полной отделкой 1 этажа всего <nobr>за 258 000 руб.</nobr></p>
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
        <span class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" itemprop="url"><span itemprop="title"><?php echo $breadcrumb;?></span></a></span>
      </div>
    </div>
  </div>
</div>
<!--Breadcrumbs-->