;(function () {
	
	'use strict';



	// iPad and iPod detection	
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) || 
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	var fullHeight = function() {
		if ( !isiPad() || !isiPhone() ) {
			$('.js-fullheight-home').css('height', $(window).height() - $('.site-main-nav').height());
			$(window).resize(function(){
				$('.js-fullheight-home').css('height', $(window).height()  - $('.site-main-nav').height());
			})
		}
	};

	// Loading page
	var loaderPage = function() {
		$(".site-loader").fadeOut("slow");
	};

	var Tabs = function() {
		// $('.site-tabs-container').
		$('.site-tabs li a').click(function(event){
			event.preventDefault();
			var $this = $(this),
				tab = $this.data('tab');
				$('.site-tabs li').removeClass('active');
				$this.closest('li').addClass('active');
				$this.closest('.site-tabs-container').find('.site-tab-content').removeClass('active');
				$this.closest('.site-tabs-container').find('.site-tab-content[data-tab-content="'+tab+'"]').addClass('active');
		});
	}

	var gridAutoHeight = function() {
		if (!isiPhone() || !isiPad()) {
			$('.site-grid-item').css('height', $('.site-2col-inner').outerHeight()/2);
		}
		$(window).resize(function(){
			if (!isiPhone() && !isiPad()) {
				$('.site-grid-item').css('height', $('.site-2col-inner').outerHeight()/2);
			}
		});
	}

	var sliderSayings = function() {
		$('#site-sayings .flexslider').flexslider({
			animation: "slide",
			slideshowSpeed: 5000,
			directionNav: false,
			controlNav: true,
			smoothHeight: true,
			reverse: true
	  	});
	}

	var offcanvasMenu = function() {
		$('body').prepend('<div id="site-offcanvas" />');
		$('body').prepend('<a href="#" class="js--nav-toggle site-nav-toggle"><i></i></a>');

		$('.site-main-nav .site-menu-1 a, .site-main-nav .site-menu-2 a').each(function(){

			var $this = $(this);

			$('#site-offcanvas').append($this.clone());

		});
		// $('#site-offcanvas').append
	};

	var mainMenuSticky = function() {
		
		var sticky = $('.site-main-nav');

		sticky.css('height', sticky.height());
		$(window).resize(function(){
			sticky.css('height', sticky.height());
		});

		var $section = $('.site-main-nav');
		
		$section.waypoint(function(direction) {
		  	
		  	if (direction === 'down') {

			    	$section.css({
			    		'position' : 'fixed',
			    		'top' : 0,
			    		'width' : '100%',
			    		'z-index' : 99999
			    	}).addClass('site-shadow');;

			}

		}, {
	  		offset: '0px'
		});

		$('.js-sticky').waypoint(function(direction) {
		  	if (direction === 'up') {
		    	$section.attr('style', '').removeClass('site-shadow');
		  	}
		}, {
		  	offset: function() { return -$(this.element).height() + 69; }
		});

	};
	
	// Parallax
	var parallax = function() {

		// $(window).stellar();
		if (!isiPhone() || isiPad() ) {
 			$(window).stellar({ horizontalScrolling: false });
 		}

	};


	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js--nav-toggle', function(event){

			var $this = $(this);

			if( $('body').hasClass('offcanvas-visible') ) {
				$('body').removeClass('offcanvas-visible site-overflow');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-visible site-overflow');
				$this.addClass('active');
			}

			event.preventDefault();

		});

	};

	var scrolledWindow = function() {

		$(window).scroll(function(){

			var scrollPos = $(this).scrollTop();

			
		   if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js--nav-toggle').removeClass('active');
		   }

		});

		$(window).resize(function() {
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js--nav-toggle').removeClass('active');
		   }
		});
		
	};

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#site-offcanvas, .js--nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas-visible') ) {

    			$('body').removeClass('offcanvas-visible');
    			$('.js--nav-toggle').removeClass('active');
				
	    	}
	    
	    	
	    }
		});

	};

	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 1000);
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
	};

	// Page Nav
	var clickMenu = function() {
		var topVal = ( $(window).width() < 769 ) ? 0 : 58;

		$(window).resize(function(){
			topVal = ( $(window).width() < 769 ) ? 0 : 58;		
		});
		$('.site-main-nav a:not([class="external"]), #site-offcanvas a:not([class="external"])').click(function(event){
			var section = $(this).data('nav-section');

				if ( $('div[data-section="' + section + '"]').length ) {

					$('html, body').animate({
			        	scrollTop: $('div[data-section="' + section + '"]').offset().top - topVal
			    	}, 1000);	
			    	
			   }

		    event.preventDefault();

		    // return false;
		});


	};

	// Reflect scrolling in navigation
	var navActive = function(section) {
		
		$('.site-main-nav a[data-nav-section], #site-offcanvas a[data-nav-section]').removeClass('active');
		$('.site-main-nav, #site-offcanvas').find('a[data-nav-section="'+section+'"]').addClass('active');
		
	};

	var navigationSection = function() {

		var $section = $('div[data-section]');
		
		$section.waypoint(function(direction) {
		  	if (direction === 'down') {
		    	navActive($(this.element).data('section'));
		  	}

		}, {
	  		offset: '150px'
		});

		$section.waypoint(function(direction) {
		  	if (direction === 'up') {
		    	navActive($(this.element).data('section'));
		  	}
		}, {
		  	offset: function() { return -$(this.element).height() + 155; }
		});

	};

	// Document on load.
	$(function(){

		// fullHeight();
		loaderPage();
		// Tabs();
		// gridAutoHeight();

		// sliderMain();
		// // sliderSayings();
		offcanvasMenu();
		mainMenuSticky();
		// parallax();
		burgerMenu();
		scrolledWindow();
		mobileMenuOutsideClick();
		// clickMenu();
		navigationSection();
		goToTop();

	});

}());