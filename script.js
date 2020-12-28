// Изменение цвета path когда мышка над названием магазина.
$('.info-item').hover(
	function(){
		$('.map path[data-id=' + $(this).data('id') + ']').attr('id', 'hover');
	},
	function(){
		$('.map path[data-id=' + $(this).data('id') + ']').attr('id', '');
	}
);	

// Клик по названию магазина - открывается подсказка.
$('.info-item').on('click', function(){
	$('.info-popup').hide();
	$('.map path').attr('class', '');

	var popup = $(this).find('.info-popup');
	$(popup).css('bottom', '-' + ($(popup).outerHeight(true) + 40) + 'px');
	$(popup).css('left', '-' + (($(popup).outerWidth(true) / 2) - ($(this).outerWidth(true) / 2)) + 'px');
	$('.info path[data-id=' + $(this).data('id') + ']').attr('class', 'active');
	$(popup).show();
});

// Клик по пути магазина - также открывается подсказка.
$('.map path').click(function(){
	$('.info-popup').hide();
	$('.info-item[data-id=' + $(this).data('id') + ']').trigger('click');
});

// Клик вне магазинов все закрывает.
$("body").click(function(e) {
	if ($(e.target).closest(".map path, .info-item").length == 0) {
		$(".info-popup").hide();
		$('.map path').attr('class', '');
	}
});

// $('body').on('click', function(){
//     var x=event.pageX;
//     var y=event.pageY;
// 	console.log(x,y)
// })