$(function(){
	var $prev = $('.tab-previous');
	var $next = $('.tab-next');
	var $tabsList = $('.simple-tabs');
	var currentTransformX = 0;
	var $tabs = $('.simple-tabs .tab');
	var tabWidth = $tabs.width();
	$tabs.on('click', function(e){
		$tabs.removeClass('active');
		$(this).addClass('active');
	});
	$prev.on('click', function(){
		//When left is 0 do something...
		$tabs.position().left;
		currentTransformX -= tabWidth;
		$tabsList.css('transform',"translateX("+currentTransformX+"px)");
	});
	$next.on('click', function(){
		if(currentTransformX == 0) {
			return;
		}
		currentTransformX += tabWidth;
	$tabsList.css('transform',"translateX("+currentTransformX+"px)");
	});
});