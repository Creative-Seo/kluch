<body id="main">
<header class="hidden-xs screen">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6" id="logo"> <a href="/"><img class="img-responsive" src="/img/logo.png" alt="Ключ 585" /></a> </div>
      <div class="col-lg-3 col-md-3 headlinks hidden-sm">
        <div> <a href="/aktsii/">Акции</a>
        <a href="/uslugi/">Услуги</a>

        <a href="/prays-list/">Прайс-лист</a> </div>
        <div style="margin-top:10px"> <a href="/fotogallery/">Фотогалерея</a> <a href="/o-nas/">О нас</a> <a href="/otzyivyi-pokupateley/">Отзывы</a> </div>
      </div>
      <div class="col-lg-3 col-md-3 adrvr hidden-sm">
        <div class="adres"><i class="fa fa-home"></i>Владимир, Лакина 4</div>
        <div class="vrem"><i class="fa fa-clock-o"></i>пн-пт: 8:00-18:00<span>сб: </span>9:00-15:00 </div>
      </div>
      <div class="col-lg-3 col-md-3 contacts col-sm-6">
        <?php
        // 7411ca86eb4fbafe8cfda550e6865cfe //
        require_once(dirname(__FILE__) . '/../refer/functions.php');
        $phone = getPhone();
        $phoneSystem = getPhoneSystem($phone);
        $phoneCode = getPhoneCode($phone);
        $phoneNumber = getPhoneNumber($phone);
        //var_dump($phone);
        //var_dump($phoneSystem);
        //var_dump($phoneCode);
        //var_dump($phoneNumber);
        ?>
        <div class="tel pull-right"><i class="fa fa-phone"></i><a href="tel:<?php echo $phoneSystem; ?>" title="Позвоните нам"><span>(<?php echo $phoneCode; ?>)</span><span class="nomer"><?php echo $phoneNumber; ?></span></a></div>
        <div class="callback pull-right open-modal"><a>Заказать обратный звонок</a> </div>
      </div>
    </div>
  </div>
</header>

<?php include($root.'blocks/navbar.php');?>