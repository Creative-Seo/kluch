function send_e(t,n,tel,email,ta){
	$.post('/email.php', {n:n, t:t, tel:tel, email:email, ta:ta, key:'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'}
		).done(function(data) {
			if (!(data)){alert('Ошибка отправки данных.');}
				else {$('#modal-ok').fadeIn().delay(3000).fadeOut();}
		}).fail(function() {
			alert('Ошибка подключения.');
		});
}
var name,tel,email,c_name,c_tel,c_email,c_text,f_name,f_tel,f_email,f_text,f_message;
$(document).ready(function() {
	$("[name=tel]").inputmask("+7 (999) 999-9999");
	$("[name=email]").inputmask("*{1,20}@*{1,20}[.*{1,4}]");
//modal
	c_name = $('#callback [name=name]');
	c_tel = $('#callback [name=tel]');
	c_email = $('#callback [name=email]');
	$("[data-toggle=callback").click(function(){
		name=true;tel=true;email=true;
		if ($(this).attr('data-options').indexOf('name') === false) {c_name.parent().parent().hidden;name=false;}
		if ($(this).attr('data-options').indexOf('tel') === false) {c_tel.parent().parent().hidden;tel=false;}
		if ($(this).attr('data-options').indexOf('email') === false) {c_email.parent().parent().hidden;email=false;}
		c_text = $(this).attr('data-text');
		$("#callback").modal('show');
	}
	$("#callback").on("hidden.bs.modal", function(){
		$(this).find("input").val('').parent().parent().show();
		$("#callback input").css('border-color','#ccc');
	});
	c_name.keypress(function(){if ($(this).val() != ''){$(this).css('border-color','#ccc');}});
	c_tel.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	c_email.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	$('#callback-btn').click(function(){
		var error = '';
		if ((c_name.val() == '')&&(name)){
			c_name.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваше имя"!\n';}
		if ((!(c_tel.inputmask("isComplete")))&&(tel)){
			c_tel.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш телефон"!\n';}
		if ((!(c_email.inputmask("isComplete")))&&(email)){
			c_email.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш E-mail"!\n';}
		if (error == ''){
			send_e(c_text,c_name.val(),c_tel.val(),c_email.val(),'');
			$("#callback").modal('hide');
			if (!(email)) {yaCounter21486487.reachGoal('callBack');}
		} else {alert('Обнаружены ошибки:\n'+error);}
	});
//forma
	f_name = $('#form [name=name]');
	f_tel = $('#form [name=tel]');
	f_email = $('#form [name=email]');
	f_message = $('#form [name=message]');
	f_text = 'Сообщение с сайта';
	f_name.keypress(function(){if ($(this).val() != ''){$(this).css('border-color','#ccc');}});
	f_tel.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	f_email.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	if (f_message){f_message.keypress(function(){if ($(this).val() != ''){$(this).css('border-color','#ccc');}});}
	$('#form-btn').click(function(){
		var error = '';
		if ((f_name.val() == '')){
			f_name.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваше имя"!\n';}
		if (!(f_tel.inputmask("isComplete"))){
			f_tel.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш телефон"!\n';}
		if (!(f_email.inputmask("isComplete"))){
			f_email.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш E-mail"!\n';}
		if (f_message){if ((f_message.val() == '')){
			f_message.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваше сообщение"!\n';}}
		if (error == ''){
			$('#form input, #form textarea').css('border-color','#ccc');
			if (f_message){send_e(c_text,f_name.val(),f_tel.val(),f_email.val(),f_message.val());}
			else {send_e(c_text,f_name.val(),f_tel.val(),f_email.val(),'');}
			$("#form input, #form textarea").val('');
		} else {alert('Обнаружены ошибки:\n'+error);}
	});
});
