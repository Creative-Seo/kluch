<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");
include($root."blocks/breadcrumbs.php");?>

<div class="container">
  <div class="row">
    <h1>Фотогалерея</h1>
    <div class="col-md-4">
    <a href="/foto-otchyot/"><img src="img/1.jpg" alt="Как мы строим дома - Ключ 585" class="img-responsive"></a>
    <a href="/foto-otchyot/">Как мы строим</a>
    </div>
    <div class="col-md-4"><a href="/bani/foto/"><img src="img/2.jpg" alt="Построенные бани - Ключ 585" class="img-responsive"></a>
    <a href="/bani/foto/">Построенные бани</a> 
    </div>
    <div class="col-md-4"><a href="/dachnyie-domiki/foto/"><img src="img/3.jpg" alt="Построенные дачные дома- Ключ 585" class="img-responsive"></a>
    <a href="/dachnyie-domiki/foto/">Дачные дома</a>
    </div>

  </div>
</div>    

<?php include($root."blocks/footer.php"); ?>