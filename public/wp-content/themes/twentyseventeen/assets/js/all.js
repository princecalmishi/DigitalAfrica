jQuery(document).ready(function(){jQuery(".scrollup").click(function(){return jQuery("html, body").animate({scrollTop:0},600),!1}),jQuery(window).scroll(function(){jQuery(this).scrollTop()>50?jQuery("header").addClass("fixed"):jQuery("header").removeClass("fixed")})});