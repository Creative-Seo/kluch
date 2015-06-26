<body id="main">
<header class="hidden-xs screen">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6" id="logo"> <a href="/"><img class="img-responsive" src="http://www.kluch585.ru/img/logo.png" alt="Ключ 585" /></a> </div>
      <div class="col-lg-3 col-md-3 headlinks hidden-sm">
        <div> <a href="http://www.kluch585.ru/aktsii/">Акции</a>
        <a href="http://www.kluch585.ru/uslugi/">Услуги</a>

        <a href="http://www.kluch585.ru/prays-list/">Прайс-лист</a> </div>
        <div style="margin-top:10px"> <a href="http://www.kluch585.ru/fotogallery/">Фотогалерея</a> <a href="http://www.kluch585.ru/o-nas/">О нас</a> <a href="http://www.kluch585.ru/otzyivyi-pokupateley/">Отзывы</a> </div>
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

<div class="nav-color">    
    <div class="container-fluid">
      <div class="row">
<div class="cd-main-header"> <a class="cd-logo hidden-lg hidden-md hidden-sm" href="#0">Ключ 585<!--<img src="http://www.kluch585.ru/img/logo.png" alt="Logo">--></a>
      <ul class="cd-header-buttons">
    <!--<li><a class="cd-search-trigger" href="#cd-search">Search<span></span></a></li>-->
    <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
  </ul>
      <!-- cd-header-buttons --> 
    </div>
<main class="cd-main-content"> 
      <!-- your content here --> 
    </main>
<div class="cd-overlay"></div>
<nav class="cd-nav">

      <ul id="cd-primary-nav" class="cd-primary-nav is-fixed" >
      
	<li><a href="/"><i class="fa fa-home fa-lg"></i></a></li>

    <li class="has-children"> <a href="javascript:void(0);">Строительство</a>
          <ul class="cd-secondary-nav is-hidden" style=" box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <li class="go-back"><a href="#0">Назад</a></li>
        
              <li><a href="http://www.kluch585.ru/derevyannyie-doma/">Деревянные дома</a></li>
            <li><a href="http://www.kluch585.ru/karkasnye-doma/">Каркасные дома</a></li>
            <li><a href="http://www.kluch585.ru/doma-iz-brevna/">Дома из бревна</a></li>
            <li><a href="http://www.kluch585.ru/doma-iz-kleenogo-brusa/">Дома из клееного бруса</a></li>
            <li><a href="http://www.kluch585.ru/doma-iz-profilirovannogo-brusa/">Дома из профилированного бруса</a></li>
            <li><a href="http://www.kluch585.ru/sruby/">Срубы</a></li>
            <li><a href="http://www.kluch585.ru/fundament/">Фундамент</a></li>
            <li><a href="http://www.kluch585.ru/bytovki/">Бытовки</a></li>

      </ul>
     </li>

	<li><a href="http://www.kluch585.ru/dachnyie-domiki/">Дачные домики</a></li>

	<li class="has-children"> <a href="javascript:void(0);">Бани</a>
          <ul class="cd-secondary-nav is-hidden" style=" box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <li class="go-back"><a href="#0">Назад</a></li>
        
              <li><a href="http://www.kluch585.ru/bani-iz-brusa/">Бани из бруса</a></li>
            <li><a href="http://www.kluch585.ru/bani-iz-brevna/">Бани из бревна</a></li>
            <li><a href="javascript:void(0);">Каркасные бани</a></li>

      </ul>
     </li>
        
    <li><a href="http://www.kluch585.ru/besedki/">Беседки</a></li>
    <li><a href="http://www.kluch585.ru/sadovyie-postroyki/">Садовые постройки</a></li>
	
     <li class="has-children"> <a href="javascript:void(0);">Пиломатериалы</a>
          <ul class="cd-secondary-nav is-hidden" style=" box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <li class="go-back"><a href="#0">Назад</a></li>
        
              <li><a href="http://www.kluch585.ru/derevyannyy-pogonazh/">Погонаж оптом</a></li>
            <li><a href="http://www.kluch585.ru/polovaya-doska/">Доска пола</a></li>
            <li><a href="http://www.kluch585.ru/brus/">Брус</a></li>
            <li><a href="http://www.kluch585.ru/blok-khaus/">Блок-хаус</a></li>
            <li><a href="http://www.kluch585.ru/vagonka/">Вагонка</a></li>
            <li><a href="http://www.kluch585.ru/plintus/">Плинтус</a></li>
            <li><a href="http://www.kluch585.ru/nalichniki/">Наличники</a></li>
            <li><a href="http://www.kluch585.ru/doska-obreznaya/">Доска обрезная</a></li>
            
      </ul>
     </li>
    <li><a href="http://www.kluch585.ru/optovikam/">Оптовикам</a></li>
    <li><a href="http://www.kluch585.ru/contacts/">Контакты</a></li>
  </ul>
      <!-- primary-nav --> 
    </nav>
<!-- cd-nav -->

   <!--<div id="cd-search" class="cd-search">
      <form>
    <input type="search" placeholder="Search...">
  </form>
    </div>-->
    
</div>  
</div>  
</div>

<a href="#" class="scrollUpButton"><i class="fa fa-chevron-up fa-2x"></i></a>