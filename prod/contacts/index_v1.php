<?php $title = 'Ключ 585 - контакты'; ?><?php $description = 'Контакты - Строительная компания «Ключ 585»'; ?><?php $keywords = ''; ?><?php $breadcrumb = 'Контакты'; ?><?php $canonical = '/contacts/'; ?><?php $root = '../';include($root."blocks/meta.php"); include($root."blocks/header.php"); include($root."blocks/breadcrumbs.php"); ?><div class="container"><div class="row"><h1>Контакты</h1><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cont"><div class="likeh2">Адрес торгово-выставочного комплекса</div><div class="cont2"><i class="fa fa-home fa-2x"></i> 600014, г. Владимир, ул. Лакина, д.4 (пос.РТС)</div><div class="cont2"><i class="fa fa-clock-o fa-2x"></i> пн-пт: 8:00-18:00, сб.9:00-15:00, вс.-выходной</div><div class="cont2"><table><tr><td><i class="fa fa-phone fa-2x"></i> Телефоны:</td><td class="cont-tel">+7 (4922) 36-45-35</td></tr><tr><td rowspan="3"></td><td class="cont-tel">+7 (4922) 36-36-95</td></tr><tr><td class="cont-tel">+7 (4922) 36-58-55</td></tr><tr><td class="cont-tel">+7 (910) 771-90-21</td></tr><tr><td><i class="fa fa-envelope-o fa-2x"></i> E-mail:</td><td class="cont-mail"><a href="mailto:agro-optim@mail.ru">agro-optim@mail.ru</a></td></tr><tr><td></td><td class="cont-mail"><a href="mailto:info@kluch585.ru">info@kluch585.ru</a></td></tr></table></div><div class="cont2"><table><tr><td>Реквизиты:</td><td class="rekv">Закрытое Акционерное Общество «Агро-Оптим»</td></tr><tr><td rowspan="4"></td><td class="rekv">ОГРН: 1023301953344</td></tr><tr><td class="rekv">ИНН/КПП 3315007157/331501001</td></tr><tr><td class="rekv">Юр.адрес: 601322 Владимирская обл.,Камешковский район,д. Неверково</td></tr><tr><td class="rekv">р/с 40702810541000000769 в ОАО «Россельхозбанк»</td></tr></table></div></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="cont2"><a class="kak-dobr-a" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><h2 class="kak-dobr">Как к нам добраться</h2></a><div class="collapse" id="collapseExample"><div class="well"><h3>Пешком</h3><p>Остановка &#171;Новинка&#187;, вниз по ул. Белоконской 10 мин. Пешком, пересекаем &#171;Пекинку&#187;, в поселок РТС поворот налево &#8212; магазин пиломатериалов Ключ585.</p><h3>На автомобиле</h3><p>185 км автодороги Москва-Нижний Новгород на пересечении дороги с ул. Белоконской при въезде в пос. РТС, поворот налево 200м-магазин пиломатериалов Ключ585.</p></div></div></div><div id="map" style="width:auto;height:500px"></div></div></div></div><div class="container"><div class="row"><div class="likeh2 tc"><div class="tcboard"></div><span class="besplcons">Форма обратной связи</span></div><div class="contact-form"><form class="jotform-form center-block" accept-charset="utf-8"><input type="hidden"><div class="form-all"><ul class="form-section"><li class="form-line"><label class="form-label-top">ФИО<span class="form-required">*</span></label><div class="form-input-wide"><input type="text" class="form-textbox" size="40" id="name3" placeholder="Ваше имя"></div></li><li class="form-line"><label class="form-label-top">E-mail<span class="form-required">*</span></label><div class="form-input-wide"><input type="email" class="form-textbox" size="40" id="mail3" placeholder="Ваш E-mail"></div></li><li class="form-line"><label class="form-label-top">Телефон</label><div class="form-input-wide"><input type="text" class="form-textbox" placeholder="+7 (___) ___-___" data-type="input-textbox" size="40" id="tel3"></div></li><li class="form-line form-line-column"><label class="form-label-top">Сообщение<span class="form-required">*</span></label><div class="form-input-wide"><textarea class="form-textarea" cols="32" rows="7" id="message" placeholder="Ваше сообщение"></textarea></div></li><li class="form-line"><div class="form-input-wide"><div style="text-align: center" class="form-buttons-wrapper"><button type="submit" class="form-submit-button form-submit-button-simple_blue" id="send_btn3">Отправить</button></div></div></li></ul></div></form></div></div></div><script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script><script type="text/javascript">ymaps.ready(init);
 
function init(){     
 
    var myMap;
 
    myMap = new ymaps.Map("map", {
        center: [56.147865,40.359768],
        zoom: 16,
        controls: []
    });
 
    
 
    myMap.controls.add("zoomControl", {
        position: {top: 15, left: 15}
    });
 
    var html  = '<div class="popup">';
        html +=     '<img src="/img/ofis.jpg" alt="" width="200" />';
        html +=     '<div class="popup-text">';
        html +=         '<span>Ключ 585</span><br>';
        html +=         '<span>ул. Лакина, д 4</span>';
        html +=     '</div>';
        html += '</div>';
	
	
 
    var myPlacemark = new ymaps.Placemark([56.147865,40.359768],
        {
          balloonContent: html
        },
        { iconLayout: 'default#image',
          iconImageHref: '/img/metka.png',
          iconImageSize: [120, 120],
          iconImageOffset: [-58, -118],
          
          balloonContentSize: [289, 151],
          balloonImageHref: '',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [300, 300],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark);
	
	
	
 
}</script><?php include($root."blocks/footer.php"); ?>