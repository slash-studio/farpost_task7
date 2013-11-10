$(function(){
	$('#film' + $('#cinema_list li.active').attr('data')).show();
	$('#cinema_list li').click(function() {
		$('#cinema_list li').removeClass('active');
		$(this).addClass('active');
		$num = $(this).attr('data');
		$('article.curfilm').hide();
		$('#film' + $num).show();
	});
});