(function($){

/* Site wide
---------------------------------------------------*/

// Add class to header when scrolled

$(document).scroll(function(){
    var scroll = $(this).scrollTop();
    if (scroll > 50) {
        $('.header-wrap').addClass('header-scrolled');
    } else {
        $('.header-wrap').removeClass('header-scrolled');
    }
});

/* Blog index page
---------------------------------------------------*/

// BS nav class to post pagination

$('.index-post-pager .page-numbers').addClass('nav-link');


/* Comments template
---------------------------------------------------*/

// Comment form textarea remove cols

$(".comment-form-comment textarea").removeAttr('cols');


/*-------------------------------------------------*/

$(".backtotop").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 400, 'linear');
});
    
})(jQuery);
