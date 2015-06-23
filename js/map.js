ymaps.ready(init);
 
function init(){     
 
    var myMap;
 
    myMap = new ymaps.Map("map", {
        center: [56.159737,40.398042],
        zoom: 10,
        controls: []
    });
 
    
 
    myMap.controls.add("zoomControl", {
        position: {top: 15, left: 15}
    });
 
    var html  = '<div class="popup">';
        html +=     '<a href="map/bogolyubovo/"><img src="http://www.kluch585.ru/map/bogolyubovo/bogolyubovo-1.jpg" alt="" width="250" /></a>';
        html +=     '<div class="popup-text">';
        html +=         '<span>Боголюбово</span><br>';
        html +=         '<span>Суздальского района</span><br>';
        html +=         '<a href="map/bogolyubovo/">Подробнее</a>';
        html +=     '</div>';
        html += '</div>';
	
	var html3  = '<div class="popup">';
        html3 +=     '<a href="map/fedurnovo/"><img src="http://www.kluch585.ru/map/fedurnovo/fedurnovo-1.jpg" alt="" width="250" /></a>';
        html3 +=     '<div class="popup-text">';
        html3 +=         '<span>Федурново</span><br>';
        html3 +=         '<span>Собинский района</span><br>';
        html3 +=         '<a href="map/fedurnovo/">Подробнее</a>';
        html3 +=     '</div>';
        html3 += '</div>';
	
	var html4  = '<div class="popup">';
        html4 +=     '<a href="map/soyma/"><img src="http://www.kluch585.ru/map/soyma/soyma-1.jpg" alt="" width="250" /></a>';
        html4 +=     '<div class="popup-text">';
        html4 +=         '<span>Сойма</span><br>';
        html4 +=         '<span>Судогодский района</span><br>';
        html4 +=         '<a href="map/soyma/">Подробнее</a>';
        html4 +=     '</div>';
        html4 += '</div>';	
	
	var html5  = '<div class="popup">';
        html5 +=     '<a href="map/selco/"><img src="http://www.kluch585.ru/map/selco/selco-1.jpg" alt="" width="250" /></a>';
        html5 +=     '<div class="popup-text">';
        html5 +=         '<span>Сельцо</span><br>';
        html5 +=         '<span>округ Владимира </span><br>';
        html5 +=         '<a href="map/selco/">Подробнее</a>';
        html5 +=     '</div>';
        html5 += '</div>';	
	
	var html6  = '<div class="popup">';
        html6 +=     '<a href="map/mordysh/"><img src="http://www.kluch585.ru/map/mordysh/mordysh-1.jpg" alt="" width="250" /></a>';
        html6 +=     '<div class="popup-text">';
        html6 +=         '<span>д. Мордыш</span><br>';
        html6 +=         '<span>Суздальского района</span><br>';
        html6 +=         '<a href="map/mordysh/">Подробнее</a>';
        html6 +=     '</div>';
        html6 += '</div>';	
		
	var html7  = '<div class="popup">';
        html7 +=     '<a href="map/zapolicy/"><img src="http://www.kluch585.ru/map/zapolicy/zapolicy-1.jpg" alt="" width="250" /></a>';
        html7 +=     '<div class="popup-text">';
        html7 +=         '<span>Заполицы</span><br>';
        html7 +=         '<span>Суздальского района</span><br>';
        html7 +=         '<a href="map/zapolicy/">Подробнее</a>';
        html7 +=     '</div>';
        html7 += '</div>';	
		
	var html8  = '<div class="popup">';
        html8 +=     '<a href="map/penkino/"><img src="http://www.kluch585.ru/map/penkino/penkino-1.jpg" alt="" width="250" /></a>';
        html8 +=     '<div class="popup-text">';
        html8 +=         '<span>Пенкино</span><br>';
        html8 +=         '<span>сан. Им Ленина</span><br>';
        html8 +=         '<a href="map/penkino/">Подробнее</a>';
        html8 +=     '</div>';
        html8 += '</div>';		
		
 

	
	
	var myPlacemark = new ymaps.Placemark([56.186582,40.520288],
        {
          balloonContent: html
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark);
	
	var myPlacemark3 = new ymaps.Placemark([56.001747,40.283957],
        {
          balloonContent: html3
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark3);
	
	var myPlacemark4 = new ymaps.Placemark([55.975081,40.72878],
        {
          balloonContent: html4
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark4);
	
	var myPlacemark5 = new ymaps.Placemark([56.133212,40.639873],
        {
          balloonContent: html5
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark5);
	
	var myPlacemark6 = new ymaps.Placemark([56.311818,40.611586],
        {
          balloonContent: html6
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark6);
	
	var myPlacemark7 = new ymaps.Placemark([56.326859,40.58896],
        {
          balloonContent: html7
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark7);
	
	var myPlacemark8 = new ymaps.Placemark([56.188737,40.905618],
        {
          balloonContent: html8
        },
        { iconLayout: 'default#image',
          iconImageHref: '../img/map_icon.png',
          iconImageSize: [60, 60],
          iconImageOffset: [-20, -47],
          
          balloonContentSize: [289, 151],
          balloonImageHref: 'http://www.sk-goldenhome.ru/img/min_popup.png',
          balloonImageOffset: [-144, -147],
          balloonImageSize: [289, 151],
          balloonShadow: true });     
 
    myMap.geoObjects.add(myPlacemark8);
	

}