$(function(){
	$('#cinema_list li:first-child').addClass('active');
	$('#film' + $('#cinema_list li.active').attr('data')).css('display', 'inline-block');
	$('#cinema_list li').click(function() {
		$('#cinema_list li').removeClass('active');
		$(this).addClass('active');
		$num = $(this).attr('data');
		$('article.curfilm').hide();
		$('#film' + $num).css('display', 'inline-block');
	});
});