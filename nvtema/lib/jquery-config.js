// JavaScript Document
//jQuery(function(){jQuery('ul.sf-menu').superfish({delay:0, speed: 'fast', autoArrows: false, dropShadows: false});});

Cufon.replace('.ge-mailinglist h3, .ge-company-content p, #ge-mailinglist-form button, .in-introduction-content-button a, .ge-phone h2, .sp-title-content-text h1, .sp-submenu li.title h3, .sp-side-header h3, #ge-content-frame h1, #ge-content-frame h2, #ge-content-frame h3, #ge-content-frame h4, #ge-content-frame h5, #ge-content-frame h6, #ge-content-frame-black h1, #ge-content-frame-black h2, #ge-content-frame-black h3, #ge-content-frame-black h4, #ge-content-frame-black h5, #ge-content-frame-black h6, .in-introduction-content h2', {  fontFamily: 'Droid Sans', hover: true });

Cufon.replace('.ge-footer-content ul li h4,.sp-content-fullwidth-black strong', { fontFamily: 'Droid Sans Bold', hover: true });

$(document).ready(function() {
   			$('.in-slideshow-rotate').cycle({fx:'scrollHorz', timeout:5000,  speed:500, pager:'.splash-control', pagerAnchorBuilder: function(idx, slide) { return '<li class="in-splash-paginate-no"><a href="#"></a></li>'; } });
});

jQuery(document).ready(function() {
    jQuery('#jcarousel-content-3').jcarousel({wrap: 'circular', scroll:3});
	jQuery('#jcarousel-content-5').jcarousel({wrap: 'circular', scroll:5});
	jQuery('#jcarousel-content-1').jcarousel({wrap: 'circular', scroll:1});
});

jQuery(function(){
	jQuery('ul.sf-menu').superfish({delay: 1000, animation: {opacity:'show',height:'show'}, dropShadows: false, autoArrows: false, speed: 'fast'});
});
