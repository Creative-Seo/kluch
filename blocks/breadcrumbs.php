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