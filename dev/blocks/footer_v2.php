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
        </ul>
        <span class="zag">Адрес офиса продаж</span>
        <ul style="padding-top:5px; margin-bottom:0px"  itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <li><span itemprop="postalCode">600014</span>, г. <span itemprop="addressRegion">Владимир</span>, <span itemprop="streetAddress">ул. Лакина, д.4</span></li>

          <li>Часы работы: пн-пт: 8:00-18:00, сб.9:00-15:00, вс.- выходной</li>
        </ul>

      </div>
    </div>
  </div>
  <!--container-->

  <div>
    <div class="container content-bottom">
      <div class="row"> © 2007–2015  ЗАО «Агро-Оптим» ОГРН: 1023301953344 ИНН/КПП 3315007157/331501001 <a style="margin-left:15px; color:#333333; text-decoration:underline" href="http://www.creative-seo.ru/" target="_blank">Создание и продвижение сайта</a> <img src="/img/logo-creative.png" alt="Создание и продвижение сайта" width="120"></div>
    </div>
    <!--container-->
  </div>
  <!--content-bottom-->
 </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/callback.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#tel").mask("+7 (999) 999-9999");
});
jQuery(function($){
   $("#tel2").mask("+7 (999) 999-9999");
});
jQuery(function($){
   $("#tel3").mask("+7 (999) 999-9999");
});
</script>
<?php echo $footer_block; ?>
<script>
	$('.navbar .dropdown').hover(function(e) {
		if (document.body.clientWidth >= "970") {$(this).toggleClass('open');}
	});
</script>
<script>
$(document).ready(function(){
	$('.open-modal').click(function(){
		$('#modal-zakaz').modal('show');
	});
});
</script>

<script>
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollUpButton').fadeIn();
        } else {
            $('.scrollUpButton').fadeOut();
        }
    });
    $('.scrollUpButton').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});
</script>
<script>
$(document).ready(function() {
	$('#send_btnz').click(function(){
		var n = $('#name-z').val(),
			t = $('#tel-z').val(),
			nomer = "<? echo $nomer ?>",
			error = '';

		$('#name-z').removeClass('error');
		$('#tel-z').removeClass('error');

		if(!n) { $('#name-z').addClass('error'); error+= 'Вы не заполнили поле "Ваше имя"!\n'; }
		if(!t) { $('#tel-z').addClass('error'); error+= 'Вы не заполнили поле "Ваш телефон"!\n'; }



		if (error != '') {
			alert('Обнаружены ошибки:\n'+error);
			return false;
		}

		$.post('/ajax4.php',
			{ n: n, t: t, nomer: nomer, key: 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			alert(data);
		}).fail(function() {
			alert('Ошибка отправки данных.');
		});

		return false;
	});
});
	</script>
<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter21486487 = new Ya.Metrika({id:21486487, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/21486487" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58917038-1', 'auto');
  ga('send', 'pageview');

</script>
 <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'cigYeBitsb';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
$('#sidebar').affix({
      offset: {
        top: $('header').height()
      }
});
</script>
<script src="/js/blocksit.min.js"></script>
<script>
$(document).ready(function() {

	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 3,
			offsetX: 2,
			offsetY: 2
		});
	});

	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 3;
		} else {
			conWidth = 1100;
			col = 4;
		}

		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 2,
				offsetY: 2
			});
		}
	});
});


</script>

<style type="text/css" media="print" id="print"></style>
<script>
$(document).ready(function(){
	$('#print-buttom').click(function(){
		$('#print').text("header, nav, footer, .breadcrumb-container, #print-buttom, #jivo_top_wrap, #jivo_copyright, #clbh_div, #clbh_phone_div, #svyaz {display: none;}");
		window.print();
		$('#print').text("");
	});
});
</script>
<script type = "text/javascript" src = "http://cdn.callbackhunter.com/widget/tracker.js" charset = "UTF-8"></script>
<script type = "text/javascript">var hunter_code = "c84a7e1a508c3da5f1c5dec4dc35f812";</script>
</body>
</html>