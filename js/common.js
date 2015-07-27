$(document).ready(function(){
	$(function($){
	   $("#tel").mask("+7 (999) 999-9999");
	});
	$(function($){
	   $("#tel2").mask("+7 (999) 999-9999");
	});
	$(function($){
	   $("#tel3").mask("+7 (999) 999-9999");
	});

	$('.navbar .dropdown').hover(function(e) {
		if (document.body.clientWidth >= "970") {$(this).toggleClass('open');}
	});
	
	$('.open-modal').click(function(){
		$('#modal-zakaz').modal('show');
	});

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

		$.post('http://www.kluch585.ru/ajax4.php',
			{ n: n, t: t, nomer: nomer, key: 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			alert(data);
		}).fail(function() {
			alert('Ошибка отправки данных.');
		});

		return false;
	});

	$('#sidebar').affix({
		  offset: {
			top: $('header').height()
		  }
	});

	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 3,
			offsetX: 2,
			offsetY: 2
		});
	});

	//window resize
	var currentWidth = 1200;
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

	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});

	$('#print-buttom').click(function(){
		$('#print').text("header, nav, footer, .breadcrumb-container, #print-buttom, #jivo_top_wrap, #jivo_copyright, #svyaz {display: none;}");
		window.print();
		$('#print').text("");
	});

	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	$(".fancybox-thumb2").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	$(window).resize();
});