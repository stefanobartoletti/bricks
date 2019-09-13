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


/* Comments template
---------------------------------------------------*/

// Comment form textarea remove cols

$(".comment-form-comment textarea").removeAttr('cols');


/* Back to top button
---------------------------------------------------*/

// Back to top

$(".backtotop").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 400, 'linear');
});

// Set visibility

$(document).scroll(function(){
    var scroll = $(this).scrollTop();
    if (scroll > 200) {
        $('.backtotop').removeClass('hidden');
    } else {
        $('.backtotop').addClass('hidden');
    }
});

    
})(jQuery);

// --- Vanilla JS ---

// BS nav class to post pagination

const pager = document.querySelectorAll('.index-post-pager .page-numbers');
pager.forEach(function(item) {
    item.classList.add('nav-link');
});
