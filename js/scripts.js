AOS.init({
	easing: 'ease-in-out-sine',
	duration: '1000'
});

$('.input-req').on('keyup',function(){
	var $this = $(this),
	val = $this.val();

	if(val.length >= 1){$(this).css('border', '3px solid #24765a');}else {$(this).css('border', '3px solid #8d3438');}
});

$(document).ready(function(){
	$('a[href^="#"]').on('click', function(e){
		e.preventDefault();
		var t = 1000;
		var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
		$('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
	});
});

$("#form").submit(function(e){
	e.preventDefault();
	call();
});

function call() {
	var inst = $('[data-remodal-id=modal]').remodal();
	var msg   = $('#form').serialize();
	$.ajax({
		type: 'POST',
		url: 'inc/form.php',
		data: msg,
		success: function(data) {
			inst.open();
			// ym(56430391, 'reachGoal', 'submit'); return true;
		},
		error:  function(xhr, str){
			alert('Возникла ошибка, попробуйте позже');
		}
	});

}