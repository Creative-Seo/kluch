<?php include($root."blocks/callback.php"); ?>

<footer style="margin-top:15px">
  <div class="container">
  <div class="row">
    <div class="logo-bottom"><img src="/img/logo2.jpg" alt="Ключ 585"></div>
    <div class="footer-content">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span class="zag">Строительство</span>
        <ul>
          <li><a href="/dachnyie-domiki/">Дачные домики</a></li>
          <li><a href="/bani/">Бани</a></li>
          
          <li><a href="/fundament/">Фундамент</a></li>
          <li><a href="/bytovki/">Бытовки</a></li>
          <li><a href="/sadovyie-postroyki/">Садовые постройки</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span class="zag">Пиломатериалы</span>
        <ul>
          <li><a href="#">Брус</a></li>
          <li><a href="#">Доска обрезная</a></li>
          <li><a href="#">Рейка</a></li>
          <li><a href="#">Вагонка</a></li>
          <li><a href="/polovaya-doska/">Доска пола</a></li>
          <li><a href="#">Блок-хаус</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span class="zag">О компании</span>
        <ul>
          <li><a href="/aktsii/">Акции</a></li>
          <li><a href="/uslugi/">Услуги</a></li>
          <li><a href="/otzyivyi-pokupateley/">Отзывы</a></li>
          <li><a href="/fotogallery/">Фотогалерея</a></li>
          <li><a href="/prays-list/">Прайс-лист</a></li>
          <li><a href="/contacts/">Контакты</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" itemscope itemtype="http://schema.org/LocalBusiness"> <span class="zag">Контакты</span>
        <ul style="padding-bottom:5px; margin-bottom:0px">
          <li><span itemprop="name">«Ключ 585»</span></li>
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
          <li><span itemprop="telephone">+7(<?php echo $phoneCode; ?>)<?php echo $phoneNumber; ?></span></li>
          <li><span itemprop="email">info@kluch585.ru</span></li>
          <li><a href="https://plus.google.com/b/110824236111847007584" rel="publisher">Мы в Google+</a></li>
        </ul>
        <span class="zag">Адрес офиса продаж</span>
        <ul style="padding-top:5px; margin-bottom:0px" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <li><span itemprop="postalCode">600014</span>, г. <span itemprop="addressRegion">Владимир</span>, <span itemprop="streetAddress">ул. Лакина, д.4</span></li>

          <li>Часы работы: пн-пт: 8:00-18:00, сб.9:00-15:00, вс.- выходной</li>
        </ul>

      </div>
    </div>
  </div>
  <!--container-->

  <div>
    <div class="container content-bottom">
      <div class="row"> © 2007–2015  ЗАО «Агро-Оптим» ОГРН: 1023301953344 ИНН/КПП 3315007157/331501001 <a style="margin-left:15px; color:#333333; text-decoration:underline" href="http://www.creative-seo.ru/" target="_blank" rel="nofollow">Создание и продвижение сайта</a> <img src="/img/logo-creative.png" alt="Создание и продвижение сайта" width="120">
      <!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=21486487&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/21486487/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:21486487,lang:'ru'});return false}catch(e){}"/></a><!-- /Yandex.Metrika informer --><!-- Yandex.Metrika counter --><noscript><div><img src="//mc.yandex.ru/watch/21486487" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
      </div>
    </div>
    <!--container-->
  </div>
  <!--content-bottom-->
 </div>
</footer>

<?php include($root.'blocks/script.php');?>

</body>
</html>