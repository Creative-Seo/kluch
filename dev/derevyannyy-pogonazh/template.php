<?php $root='../../';
include($root."blocks/meta.php");
include($root."blocks/header_moscow.php");
include($root."blocks/breadcrumbs.php"); ?>

<div class="container">
  <div class="row">
    <h1><?php echo $lang['h1']; ?></h1>
    <div class="col-md-5 col-sm-4 col-xs-6">
		<img src="/img/pogonazh/vid/<?php echo $lang['img1']; ?>" alt="<?php echo $lang['alt']; ?>" class="img-responsive">
	</div>
	<div class="col-md-4 col-sm-4 col-xs-6">
		<img src="/img/pogonazh/plan/<?php echo $lang['img2']; ?>" alt="<?php echo $lang['alt']; ?>" class="img-responsive">
	</div>
	<div class="clearfix visible-xs"></div>
    <div class="col-md-3 col-sm-4 col-xs-12">
		<div class="cena-block"> <span class="price-proekt2">Стоимость:</span>
		<table class="table" style="text-align:center; vertical-align: central;">
<?php foreach ($lang['cena'] as $key => $value) { ?>
			<tr>
				<td><?php echo $value[0]; ?></td>
				<td><?php echo $value[1]; ?></td>
			</tr>
<?php } ?>
		</table>
		<button class="button-style open-modal">Оставить заявку</button>
		</div>
	</div>
  </div>
  <p><?php echo $lang['p']; ?></p>
  <div class="row" itemtype="http://schema.org/ItemList" itemscope>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title"><span>Похожие товары</span></div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border2"></div>
<?php foreach ($eche as $row) { ?>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 proekt" itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
		<a itemprop="url" href="/derevyannyy-pogonazh/<?php echo $row[0]; ?>/">
			<img itemprop="image" src="/img/pogonazh/<?php echo $row[1]; ?>.jpg" class="img-responsive" alt="<?php echo $row[2]; ?>"></a>
		<div class="arrow_box6 asf"> <span class="proekt-name" itemprop="name"><?php echo $row[2]; ?></span></div>
	</div>
<?php } ?>
  </div>
</div>

<?php include($root."blocks/footer.php"); ?>