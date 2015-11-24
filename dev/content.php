<?php $root = '';
include("blocks/meta.php");
include("blocks/header.php");?>

<div id="carousel" class="carousel slide hidden-xs" data-ride="carousel">
  <div class="carousel-inner">
<?php 
$active = ' active';
foreach ($carousel as $key => $row) {
	if ($key == 1) {$active ='';}
	$indicators .= '<div data-target="#carousel" data-slide-to="'.$key.'" class="carousel-circle'.$active.'"></div>';
?>
    <div class="item<? echo $active;?>">
      <div class="carousel-fon"><img class="carousel-img" src="/img/slider/<?php echo $row['img'];?>.jpg" alt=" "></div>
      <div class="carousel-caption">
        <p class="carousel-text"><?php echo $row['text'];?></p>
		    <a href="<?php echo $row['url'];?>" class="carousel-about">Подробнее</a>
      </div>
    </div>
<?php } if ($key>0) { ?>
  </div>
  <div class="carousel-indicators">
    <?php echo $indicators;?>
<?php } ?>
  </div>
</div>

<div class="container visible-xs">
  <div class="row">
    <div class="col-xs-12">
      <div class="tel center-block"><i class="fa fa-phone"></i><a href="tel:+74922363695" title="Позвоните нам"><span>(4922)</span><span class="nomer">36-36-95</span></a></div>
    </div>
    <div class="col-xs-12 adrvr">
      <div class="adres"><i class="fa fa-home"></i>Владимир, Лакина 4</div>
      <div class="vrem"><i class="fa fa-clock-o"></i>пн-пт: 8:00-18:00<span><br>
        сб: </span>9:00-15:00 </div>
    </div>
  </div>
</div>

<!--item-->
<div class="container-fluid plitka">

    <div class="col-md-6 parent"> <a title="Деревянные дома" href="/derevyannyie-doma/"><img src="/img/brevno.jpg" class="img-responsive" alt="Деревянные дома" title="Деревянные дома"></a>
      <div class="child">
        <div class="zag1 zagd"><a title="Деревянные дома" href="/derevyannyie-doma/">Деревянные дома</a></div>
      </div>
    </div>
    <div class="col-md-6  parent hidden-xs"> <a href="/doma-iz-brevna/"><img src="/img/brus.jpg" class="img-responsive" alt="Дома из бревна"></a>
      <div class="child">
        <div class="zag1 zagd"><a href="/doma-iz-brevna/">Дома из бревна</a></div>
      </div>
    </div>
    <div class="col-md-6 parent visible-xs">
      <div class="child2">
        <div class="zag1 zagd"><a href="/bani/" title="Бани">Бани</a></div>
      </div>
      <a href="/bani/" title="Бани"> <img src="/img/4.jpg" class="img-responsive" alt="Бани"></a> </div>

</div>
<!--item-->

<!--item-->
<div class="container-fluid plitka">

    <div class="col-md-6  parent  visible-xs"> <a href="/doma-iz-brevna/"><img src="/img/brus.jpg" class="img-responsive" alt=""></a>
      <div class="child">
        <div class="zag1 zagd"><a href="/doma-iz-brevna/">Дома из бревна</a></div>
      </div>
    </div>
    <div class="col-md-6 parent">
      <div class="child2">
        <div class="zag1 zagd"><a href="/dachnyie-domiki/">Дачные домики</a></div>
      </div>
      <a href="/dachnyie-domiki/" title="Дачные домики"><img src="/img/3.jpg" class="img-responsive" alt="Дачные домики" title="Дачные домики"></a> </div>
    <div class="col-md-6 parent hidden-xs">
      <div class="child2">
        <div class="zag1 zagd"><a href="/bani/" title="Бани">Бани</a></div>
      </div>
      <a href="/bani/" title="Бани"> <img title="Бани" src="/img/4.jpg" class="img-responsive" alt="Бани"></a> </div>

</div>
<!--item-->
<div class="border"></div>
<div class="container">
  <div class="article">
    <article>
      <h1 class="borderH1">Дом из бруса «под ключ» – правильный выбор</h1>
      <p>Отдавая предпочтение дому из бруса, заказчик получает строение, обладающее природной красотой и экологичностью, прекрасной способностью сохранять тепло. Эксплуатация такого дома в последующем не принесет проблем. Чтобы защитить от возгорания, брус обрабатывают огнезащитными средствами.
Удобство бруса как строительного материала позволяет максимально интенсифицировать процесс строительства. Он практически не дает усадки, не трескается. Для возведения используют брусья клееные (для средних и больших домов), профилированные (для любых строений) или строганные (для небольших построек).
Для того чтобы возведение прошло максимально быстро, и полученный результат оправдал ожидания, следует обратиться к профессионалам и воспользоваться предложением строительства из бруса под ключ. Задачей заказчика в этом случае станет изложение своего видение дома, согласование предложенного проекта и оплата его реализации. Все остальные этапы будут выполнены командой профессионалов на высоком уровне в указанные сроки.</p>
       <h2>Возведение дома из сруба проходит в несколько этапов</h2>
       <ul>
       	<li>Выбирается участок, изучаются особенности грунтов, площадки, выясняются пожелания по количеству комнат, этажей, и с учетом этого разрабатывается проект дома. После согласования и подписания договора, приступают к строительству.</li>
       	<li>Закладывается фундамент. Его тип определяется местными условиями, свойствами грунта. Дома из бруса весят немного, поэтому мощный фундамент не потребуется.</li>
       	<li>Перед возведением стен устраивают слой гидроизоляции. Начинают с укладки первого ряда брусьев с использованием техники венца, проверяют геометрическую точность кладки. Зазоры между брусьями уплотняются синтепоном или жгутом. Если все соответствует проекту, то возводится первый этаж, монтируется перекрытие и второй этаж.</li>
       	<li>Для кровли может использоваться черепица разных видов. Внимание следует уделить утеплению кровли и ее гидроизоляции. Обязательно устройство водостоков.</li>
       	<li>После возведения потребуется время, чтобы дом «устоялся», а затем можно переходить к прокладке коммуникаций и отделочным работам. Для отделки идеально подойдут натуральные материалы, которые позволяют сохранить его экологичность и естественность.</li>
       </ul>
       Срок возведения дома зависит от времени года, размеров дома, материалов, он может составить пару месяцев или полгода.
      <p>С 1998 года наше предприятие занимается строительством деревянных домов, бань, дачных домиков. Мы перерабатываем древесину, сушим, строгаем, производим погонажные изделия из клееной древесины и профилированный брус для строительства.</p>
      <h2>Преимущества сотрудничества с нашей компанией</h2>
      <ul>
      	<li>С 1998 года мы производим на собственном предприятии во Владимире изделия из дерева и строительные материалы, поэтому наши дома, дачи и бани - недорогие и качественные.</li>
      	<li>Главное наше достижение - доверие клиентов, завоёванное добросовестной работой и хорошей продукцией.</li>
      	<li><a href="/otzyivyi-pokupateley/">Положительные отзывы</a> - лучшее подтверждение качества нашей работы.</li>
      	<li>Мы можем показать любое сооружение, построенное нами, нам нечего скрывать.</li>
      	<li>Вы успешно вложите свои деньги, т.к. мы гарантируем качество!</li>
        <li>Наши специалисты дадут вам  бесплатные консультации по вопросам процесса строительства и производства продукции.</li>
        <li>Вам предложат оптимальный вариант сооружения, где цена будет сочетаться с качеством и надёжностью.</li>
        <li>Мы предлагаем экономить на посредниках, а не на качестве материала и квалификации работников.</li>
        <li>Нас не нужно искать - уже более 15 лет без переездов мы работаем во Владимире, завоевав доверие земляков надёжностью и добросовестной работой.</li>
      </ul>

    </article>
  </div>
</div>

<div class="container" itemtype="http://schema.org/ItemList" itemscope>

    <div class="likeh2">Популярные проекты</div>
 <!--col-md-6-->
     <?php include("dachnyie-domiki/dom-1/param.php"); ?>
     <?php include("blocks/block-proekt.php"); ?>


    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-2-s-navesom/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->
    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-3/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->
    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-4/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->

    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-5/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-6/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->
    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-7/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->
    <!--col-md-6-->
    <?php include("dachnyie-domiki/dom-8/param.php"); ?>
    <?php include("blocks/block-proekt.php"); ?>

    <!--col-md-6-->


</div><!--container-->

<!--<div class="container hidden-xs">
  <h2>Карта построенных домов</h2>
    <div id="map" style="width:auto;height:550px;"></div>
</div>-->

<div class="hidden-xs">
<div class="mys">Мы производим</div>
<div class="border"></div>
<div class="container-fluid plitka">

    <div class="col-md-3  border-left arrow_box4">
      <div class="zag1"><a href="/brus/">Брус</a></div>
    </div>
    <div class="col-md-3 border-left arrow_box4">
      <div class="zag1"><a href="/vagonka/">Вагонка</a></div>
    </div>
    <div class="col-md-3  border-left arrow_box4">
      <div class="zag1"><a href="/polovaya-doska/">Доска пола</a></div>
    </div>
    <div class="col-md-3 border-left arrow_box4">
      <div class="zag1"><a href="/plintus/">Плинтус</a></div>
    </div>

</div>
<div class="container-fluid plitka">

    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/brus/"><img src="/img/brusok.jpg" class="img-responsive" alt="Брусок"></a> </div>
    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/vagonka/"> <img src="/img/vag.jpg" class="img-responsive" alt="Вагонка"></a> </div>
    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/polovaya-doska/"><img src="/img/pol.jpg" class="img-responsive" alt="Доска пола"></a> </div>
    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/plintus/"> <img src="/img/pli.jpg" class="img-responsive" alt="Плинтус"></a> </div>

</div>
<div class="container-fluid plitka">

    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/doska-obreznaya/"><img src="/img/obr.jpg" class="img-responsive" alt="ДОСКА ОБРЕЗНАЯ"></a> </div>
    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/blok-khaus/"> <img src="/img/bl.jpg" class="img-responsive" alt="БЛОК-ХАУС"></a> </div>
    <div class="col-sm-6 col-md-3 image-thumb"> <a href="/nalichniki/"><img src="/img/nal.jpg" class="img-responsive" alt="НАЛИЧНИК"></a> </div>
    <div class="col-sm-6 col-md-3 image-thumb"> <a href="#"> <img src="/img/pli.jpg" class="img-responsive" alt=""></a> </div>

</div>
<div class="container-fluid plitka">

    <div class="col-md-3 arrow_box5">
      <div class="zag1"><a href="/doska-obreznaya/">Доска обрезная</a></div>
    </div>
    <div class="col-md-3 arrow_box5">
      <div class="zag1"><a href="/blok-khaus/">Блок-хаус</a></div>
    </div>
    <div class="col-md-3  arrow_box5">
      <div class="zag1"><a href="/nalichniki/">Наличник</a></div>
    </div>
    <div class="col-md-3  arrow_box5">
      <div class="zag1"><a href="/plintus/">Плинтус</a></div>
    </div>

</div>
</div>

<div class="container">
  <div class="row">
    <div class="likeh2 tc">
      <div class="tcboard"></div>
      <span class="besplcons">Получить бесплатную консультацию</span></div>
    <div class="contact-form">
      <form class="jotform-form center-block" accept-charset="utf-8">
        <input type="hidden"  />
        <div class="form-all">
          <ul class="form-section">
            <li class="form-line">
              <label class="form-label-top"> ФИО<span class="form-required">*</span> </label>
              <div class="form-input-wide">
                <input type="text" class="form-textbox" data-type="input-textbox" id="name2" name="q5_input5" size="40" placeholder="Ваше имя">
              </div>
            </li>
            <li class="form-line">
              <label class="form-label-top"> E-mail </label>
              <div class="form-input-wide">
                <input type="email" class="form-textbox" size="40" id="mail" placeholder="Ваш E-mail">
              </div>
            </li>
            <li class="form-line">
              <label class="form-label-top"> Телефон<span class="form-required">*</span> </label>
              <div class="form-input-wide">
                <input type="text" class="form-textbox" placeholder="+7 (___) ___-___" data-type="input-textbox" size="40" id="tel2">
              </div>
            </li>
            <li class="form-line">
              <div class="form-input-wide">
                <div style="text-align: center;" class="form-buttons-wrapper">
                  <button type="submit" class="form-submit-button form-submit-button-simple_blue" id="send_btn2"> Отправить </button>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </form>
    </div>
    <!--contact-form-->
  </div>
  <!--row-->
</div>
<!--container-->

<?php include("blocks/footer.php"); ?>