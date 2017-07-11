$(document).ready(function () {
    
    var windowSize = $(window).width();
    
     // Window Size 782
     if (windowSize > 782) {
        $('.safety-accordion-section, .outfitters-accordion-section').addClass('vc_active');
        // ON SCROLL HIDE LOGO ON SPLASH PAGE
        $(window).scroll(function() {
           if ($(this).scrollTop() > 100 ) {
               $('.page-template-template-splash>div>div>header>div>div>div>div>a>.mk-desktop-logo.dark-logo').fadeOut('slow');
           } else {
               $('.page-template-template-splash>div>div>header>div>div>div>div>a>.mk-desktop-logo.dark-logo').fadeIn('slow');
           } 
        });
    } else {
        // Click function for accordion toggle only if window is below 782px 
        $('.vc_tta-panel-heading').click(function () {
            $('.vc_tta-panel-body').not(this).slideUp('slow');
            $(this).next('.vc_tta-panel-body').slideToggle('slow');
            $('span.vc_tta-title-text').not(this).removeClass('minus');
            $('span.vc_tta-title-text', this).toggleClass('minus');
        });
        $('.mobile-nav-tab-container-header>div>div>div>.vc_tta-panel-body').hide();
        // Click function for Tab into Accordion to toggle content //
        $('.title-mobile').click(function (e) {
            e.preventDefault();
            $(this).next('.mk-tabs-pane-content').slideToggle('slow');
            $('.title-mobile').not(this).addClass('display-none');   
            $('.title-mobile').toggleClass('display-none');
        });
        $('.mobile-nav-tab-container').append(jQuery('.mk-tabs-tabs, .programs-tabs-link-column'));
        // Sticky Nav 
        $(".e-tab-container>nav>select").trigger("sticky_kit:detach");
    }
    
    // Window Size 1140
    if (windowSize > 1140) {
        // Area for future scripts if window size is greater than 1140px
    } else {
        // Add Overlay to page body elements
        $('#mk-theme-container').prepend('<div class="mobile-overlay"></div>');
        
        // Mobile Menu Scripts, Add Mobile Image Class
        var mobileButtons = $('.menu-button-links').not('.no-mega-menu');
        $('.header-logo>a>img').addClass('.mobile-img');
        $('ul.mk-responsive-nav').prepend(mobileButtons);
        
        // Mobile Menu Overlay Function
        $('.mk-css-icon-menu').on('click', function(){
           if ( $('.mk-nav-responsive-link').hasClass('is-active') ) {
                $('.mobile-overlay').fadeOut('fast');
            } else {
                $('.mobile-overlay').fadeIn('fast');
            } 
        });
        
        // Append French/English Button for Montreal in mobile
//        var languageButtons = $('.french-btn, .english-btn').not('.no-mega-menu');
//        $('ul.mk-responsive-nav').append(languageButtons);
    }
    
});