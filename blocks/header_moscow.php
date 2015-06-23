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
        <div class="adres"><i class="fa fa-home"></i>Москва, ул. Электродная, д.2, стр. 28</div>
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
        <div class="tel pull-right"><i class="fa fa-phone"></i><a href="tel:+74993502747" title="Позвоните нам"><span>(499)</span><span class="nomer">350-27-47</span></a></div>
        <div class="callback pull-right open-modal"><a>Заказать обратный звонок</a> </div>
        <?php include("http://www.kluch585.ru/blocks/callback.php"); ?>
      </div>
    </div>
  </div>
</header>
<nav class="navbar yamm navbar-default" id="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="visible-xs" href="/"><img class="img-responsive" width="120" src="http://www.kluch585.ru/img/logo.png" alt="Ключ 585" /></a> </div>
    <!--navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/"><i class="fa fa-home fa-lg"></i></a></li>
        <li class="dropdown">
			<a class="dropdown-toggle visible-xs visible-sm" data-toggle="dropdown" href="http://www.kluch585.ru/derevyannyie-doma/">Строительство домов <span class="caret"></span></a>   
			<a class="dropdown-toggle hidden-xs hidden-sm" href="http://www.kluch585.ru/derevyannyie-doma/" style="padding-top: 5px; padding-bottom: 5px;">Строительство<br>домов <span class="caret"></span></a>   
        <ul class="dropdown-menu text-dropdown-menu" role="menu" style="background-color:#fff">
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
        <li>
			<a class="visible-xs visible-sm" href="http://www.kluch585.ru/dachnyie-domiki/">Дачные домики</a>
			<a class="hidden-xs hidden-sm" href="http://www.kluch585.ru/dachnyie-domiki/" style="padding-top: 5px; padding-bottom: 5px;">Дачные<br>домики</a>
		</li>
        <li class="dropdown yamm-fw">
			<a class="dropdown-toggle visible-xs visible-sm" data-toggle="dropdown" href="http://www.kluch585.ru/bani/">Бани <span class="caret"></span></a>
			<a class="dropdown-toggle hidden-xs hidden-sm" href="http://www.kluch585.ru/bani/">Бани <span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu" style="background-color:#fff">
            <li class="visible-xs"><a href="http://www.kluch585.ru/bani-iz-brusa/">Бани из бруса</a></li>
            <li class="visible-xs"><a href="http://www.kluch585.ru/bani-iz-brevna/">Бани из бревна</a></li>
            <li class="visible-xs"><a href="http://www.kluch585.ru/karkasnye-bani/">Каркасные бани</a></li>
			<div class="row hidden-xs fon" style="padding:20px;">
             <div class="col-md-4">
              <div class="menu-block">
               <a href="http://www.kluch585.ru/bani-iz-brusa/"><img src="http://www.kluch585.ru/img/banya-iz-brusa.jpg" alt="Бани из бруса" class="img-circle pull-left"></a>
               <div class="podmenu pull-left">
               <a href="http://www.kluch585.ru/bani-iz-brusa/">Бани из бруса</a>
               </div>
              </div>
             </div>
             <div class="col-md-4">
              <div class="menu-block">
               <a href="http://www.kluch585.ru/bani-iz-brevna/"><img src="http://www.kluch585.ru/img/banya-iz-brevna.jpg" alt="Бани из бревна" class="img-circle pull-left"></a>
               <div class="podmenu pull-left">
               <a href="http://www.kluch585.ru/bani-iz-brevna/">Бани из бревна</a>
               </div>
              </div>
             </div>
             <div class="col-md-4">
              <div class="menu-block">
               <a href="#"><img src="http://www.kluch585.ru/img/karkasnaya-banya.jpg" alt="Каркасные бани" class="img-circle pull-left"></a>
               <div class="podmenu pull-left">
               <a href="http://www.kluch585.ru/karkasnye-bani/">Каркасные бани</a>
               </div>
              </div>
             </div>
          </div>
        </ul>
        </li>
        <li><a href="http://www.kluch585.ru/besedki/">Беседки</a></li>
		<li>
			<a class="visible-xs visible-sm" href="http://www.kluch585.ru/sadovyie-postroyki/">Садовые постройки</a>
			<a class="hidden-xs hidden-sm" href="http://www.kluch585.ru/sadovyie-postroyki/" style="padding-top: 5px; padding-bottom: 5px;">Садовые<br>постройки</a>
		</li>
        <li class="dropdown">
			<a class="dropdown-toggle visible-xs visible-sm" data-toggle="dropdown" href="http://www.kluch585.ru/pilomaterialyi/">Пиломатериалы <span class="caret"></span></a>
			<a class="dropdown-toggle hidden-xs hidden-sm" href="http://www.kluch585.ru/pilomaterialyi/">Пиломатериалы <span class="caret"></span></a>
          <ul class="dropdown-menu text-dropdown-menu" role="menu" style="background-color:#fff">
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
        <li><a href="http://www.kluch585.ru/contacts/" class="lasta">Контакты</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->

  </div>
  <!--container-->
</nav>
<a href="#" class="scrollUpButton"><i class="fa fa-chevron-up fa-2x"></i></a>