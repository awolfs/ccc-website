$(document).ready(function()
{
	/*
	$('.schedule td.info .title').click(function()
	{
		$(this).parent('.info').find('.more-info').toggle(function()
		{
			$(this).parent('.info').find('.more-info-click').text('+');
			
		}, function()
		{
			$(this).parent('.info').find('.more-info-click').text('-');
		});
	});
	*/
	
	function showToggle()
	{
		$(this).parent('.info').find('.more-info').slideDown();
		$(this).parent('.info').find('.more-info-click').text('-');
		$(this).one('click', hideToggle);
	}
	
	function hideToggle()
	{
		$(this).parent('.info').find('.more-info').slideUp();
		$(this).parent('.info').find('.more-info-click').text('+');
		$(this).one('click', showToggle);
	}
	$('.schedule td.info .title').one('click', showToggle);
});