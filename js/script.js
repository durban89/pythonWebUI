$(function(){
	$('input.nav-search-text').focus(function(){
		var width = $(this).css('width');
		width = parseInt(width) * 2;
		if(width > 400){
			width = 400;
		}
		$(this).animate({'width':width + 'px',opacity:"1"},500);
	})
	$('input.nav-search-text').blur(function(){
		var width = $(this).css('width');
		width = parseInt(width) / 2;
        if(width < 150)
        {
            width = 200;
        }
		$(this).animate({'width':width + 'px',opacity:"1"},500);
	});
});

$(function(){
	$.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 200, // Animation in speed (ms)
          animationOutSpeed: 200, // Animation out speed (ms)
          scrollText: '滑动到顶部', // Text for element
          activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });
});

$(function(){
	$("#createModal").click(function(){
	    var target = $(this).attr('data-target');
	    var url = $(this).attr('href');
	    $(target).load(url);
	});
});
