$(document).ready(function () {
    
    // Montreal French/English Button
    $('.french-btn, .english-btn').prependTo($('.mk-grid.header-grid'));
    
    // Parse the URL parameter
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    // Give the parameter a variable name
    var dynamicContent = getParameterByName('lang');
    
    var url = window.location.href;
    
    if (dynamicContent == 'fr') {
        $('.french-btn').hide();
		$('.english-btn').show();
	} else {
        $('.english-btn').hide();
        $('.french-btn').show();
    }
    
    // Sticky Side Nav Area 
    $("ul.mk-tabs-tabs, .e-tab-container>nav").stick_in_parent({offset_top: 150});
    
    $('ul.mk-tabs-tabs, .programs-tabs-link-column')
    .on('sticky_kit:bottom', function(e) {
    $(this).parent().css('position', 'static');
    }) 
    .on('sticky_kit:unbottom', function(e) {
    $(this).parent().css('position', 'relative');
    });

    // Footer Social Icons
    $(function() {
        if ( document.location.href.indexOf('/montreal') > -1 ) {
            $('#sub-footer>.mk-grid').prepend('<div class="footer-social"><div class="social-icon-container"><a  target="_blank" href="https://www.facebook.com/LeCycloDefi/">&#xf09a;</a></div> <div class="social-icon-container"><a target="_blank" href="https://www.instagram.com/quebecride/">&#xf16d;</a></div> <div class="social-icon-container"><a target="_blank" href="https://twitter.com/TheQuebecRide">&#xf099;</a></div></div>');
        } else {
            $('#sub-footer>.mk-grid').prepend('<div class="footer-social"><div class="social-icon-container"><a  target="_blank" href="https://www.facebook.com/OntarioRide">&#xf09a;</a></div> <div class="social-icon-container"><a target="_blank" href="http://instagram.com/ontarioride">&#xf16d;</a></div> <div class="social-icon-container"><a target="_blank" href="http://www.twitter.com/TheOntarioRide">&#xf099;</a></div></div>');
        }
    });
    
    // Open Accordion on Outfitters Page
    $('.outfitters-accordion-section').removeClass('vc_active');
    
    // Accordion to change into minus on click
    $('.vc_tta-panel-heading').click(function(){
       var collapsed=$(this).find('i').hasClass('fa-plus');

        $('.vc_tta-icon').removeClass('fa-minus');

        $('.vc_tta-icon').addClass('fa-plus');
        if(collapsed){
            $('.vc_tta-icon',this).toggleClass('fa-plus fa-minus');
        }
    });
    
    // Top Teams JSON Script
    var topTeamsURL = 'https://secure2.convio.net/cfrca/site/CRTeamraiserAPI?method=getTopTeamsData&api_key=cfrca&v=1.0&fr_id=1581&response_format=json';
    
    $.getJSON(topTeamsURL, function(data){
        var topTeamsData = data.getTopTeamsDataResponse.teamraiserData;
        $(topTeamsData).each(function (index, value){
            $('#top-teams').append("<li>" + value.name + "</li>" + "<li>" + value.total + "</li>");
       }); 
    });
    
    // Top Fundraising JSON Script
    var fundRaisingURL = 'https://secure2.convio.net/cfrca/site/CRTeamraiserAPI?method=getTopParticipantsData&api_key=cfrca&v=1.0&fr_id=1581&response_format=json';
    
    $.getJSON(fundRaisingURL, function(data){
        var topFundraisingData = data.getTopParticipantsDataResponse.teamraiserData;
        $(topFundraisingData).each(function (index, value){
            $('#top-fundraising').append("<li>" + value.name + "</li>" + "<li>" + value.total + "</li>");
       }); 
    });
    
    // Top Crews List
    var topCrewsURL = 'https://crossorigin.me/http://to17.conquercancer.ca/top_ten_lists/cfrca.top_ten_crew_Toronto17.html';
    
    $.get(topCrewsURL, function(data) {
       $('#top-crews').append(data);
    });
    
    // Top Ambassadors List
    var topAmbassadorsURL = 'https://crossorigin.me/http://to17.conquercancer.ca/top_ten_lists/cfrca.Toronto17_Ambassadors_List_hide.html';
    
    $.get(topAmbassadorsURL, function(data) {
       
        $('#top-ambassadors').html(data);
//       $('#top-ambassadors').append(data);
    });
    
    // View More or View Less for Top List and Text
    $('ul#top-teams, ul#top-fundraising, #top-ambassadors').on('click','.more', function(){

      if( $(this).hasClass('less') ){    
        $(this).text('More...').removeClass('less');    
      }else{
        $(this).text('Less...').addClass('less'); 
      }

      $(this).siblings('li.toggleable').slideToggle();
    }); 
    
}); // END Document Ready

// Window Load Function
$(window).on("load",function(){
    //Preloard to FadeOut on Load
   $('div#ride-preloader').fadeOut('slow');
    
    // View More or Less Function
    $('ul#top-teams, ul#top-fundraising').each(function(){
  
      var liFind = $(this).find('li').length;

      if( liFind > 10){    
        $('li', this).eq(9).nextAll().hide().addClass('toggleable');
        $(this).append('<li class="more">More...</li>');    
      }

    });
    
    // View More or Less Function for Top Ambassadors
    $('#top-ambassadors').each(function(){
  
      var liFind = $(this).find('dd').length;

      if( liFind > 5){    
        $('dd', this).eq(4).nextAll().hide().addClass('toggleable');
        $(this).append('<dd class="more">More...</dd>');
      }

    });
    
    // View More or Less Plugin
   (function($) {
        $.fn.shorten = function (settings) {

            var config = {
                showChars: 100,
                ellipsesText: "...",
                moreText: "more",
                lessText: "less"
            };

            if (settings) {
                $.extend(config, settings);
            }

            $(document).off("click", '.morelink');

            $(document).on({click: function () {

                    var $this = $(this);
                    if ($this.hasClass('less')) {
                        $this.removeClass('less');
                        $this.html(config.moreText);
                    } else {
                        $this.addClass('less');
                        $this.html(config.lessText);
                    }
                    $this.parent().prev().toggle();
                    $this.prev().toggle();
                    return false;
                }
            }, '.morelink');

            return this.each(function () {
                var $this = $(this);
                if($this.hasClass("shortened")) return;

                $this.addClass("shortened");
                var content = $this.html();
                if (content.length > config.showChars) {
                    var c = content.substr(0, config.showChars);
                    var h = content.substr(config.showChars, content.length - config.showChars);
                    var html = c + '<span class="moreellipses">' + config.ellipsesText + ' </span><span class="morecontent"><span>' + h + '</span> <a href="#" class="morelink">' + config.moreText + '</a></span>';
                    $this.html(html);
                    $(".morecontent span").hide();
                }
            });

        };

     })(jQuery);
    // Class with options for More/Less
    $(".more-less-text>p").shorten({
        "showChars" : 170,
        "moreText"	: "See More",
        "lessText"	: "Show Less",
    });
    $(".more-less-text-french>p").shorten({
        "showChars" : 170,
        "moreText"	: "Lire la suite",
        "lessText"	: "Réduire",
    });
});