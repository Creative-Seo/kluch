$(document).ready(function() {
	$('#send_btn').click(function(){
		var n = $('#name').val(),
			t = $('#tel').val(),
			

			error = '';
		
		$('#name').removeClass('error');
		$('#tel').removeClass('error');
		
		if(!n) { $('#name').addClass('error'); error+= 'Вы не заполнили поле "Ваше имя"!\n'; }
		if(!t) { $('#tel').addClass('error'); error+= 'Вы не заполнили поле "Ваш телефон"!\n'; }
		
		
		if (error != '') {
			alert('Обнаружены ошибки:\n'+error);
			return false;
		}
		
		$.post('http://www.kluch585.ru/ajax.php',
			{ n: n, t: t, key: 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			alert(data);
		}).fail(function() {
			alert('Ошибка отправки данных.');
		});
		
		return false;
	});
});

$(document).ready(function() {
	$('#send_btn2').click(function(){
		var n = $('#name2').val(),
			t = $('#mail').val(),
			m = $('#tel2').val(),
			error = '';
		
		$('#name2').removeClass('error');
		$('#mail').removeClass('error');
		$('#tel2').removeClass('error');
		if(!n) { $('#name2').addClass('error'); error+= 'Вы не заполнили поле "Ваше имя"!\n'; }
		if(!t) { $('#mail').addClass('error'); error+= 'Вы не заполнили поле "Ваш телефон"!\n'; }
		if(!m) { $('#tel2').addClass('error'); error+= 'Вы не написали сообщение!\n'; }
		
		if (error != '') {
			alert('Обнаружены ошибки:\n'+error);
			return false;
		}
		
		$.post('http://www.kluch585.ru/ajax2.php',
			{ n: n, t: t, m: m, key: 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			alert(data);
		}).fail(function() {
			alert('Ошибка отправки данных.');
		});
		
		return false;
	});
});

$(document).ready(function() {
	$('#send_btn3').click(function(){
		var n = $('#name3').val(),
			t = $('#mail3').val(),
			m = $('#tel3').val(),
			s = $('#message').val(),
			error = '';
		
		$('#name3').removeClass('error');
		$('#mail3').removeClass('error');
		$('#tel3').removeClass('error');
		$('#message').removeClass('error');
		if(!n) { $('#name3').addClass('error'); error+= 'Вы не заполнили поле "Ваше имя"!\n'; }
		if(!t) { $('#mail3').addClass('error'); error+= 'Вы не заполнили поле "Ваша почта"!\n'; }
		if(!m) { $('#tel3').addClass('error'); error+= 'Вы не заполнили поле "Ваш телефон"!\n'; }
		if(!s) { $('#message').addClass('error'); error+= 'Вы не написали сообщение!\n'; }
		
		if (error != '') {
			alert('Обнаружены ошибки:\n'+error);
			return false;
		}
		
		$.post('http://www.kluch585.ru/ajax3.php',
			{ n: n, t: t, m: m, s: s, key: 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			alert(data);
		}).fail(function() {
			alert('Ошибка отправки данных.');
		});
		
		return false;
	});
});