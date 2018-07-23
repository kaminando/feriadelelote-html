(function($) {
	"use strict";

	var header 		  = $(".site-header"),
	 	navbarNav	  = $(".navbar-nav"),
	 	navbarLI	  = $(".navbar-nav > li"),
	 	navbarAnchor  = $(".navbar-nav > li > a"),
	 	submenu 	  = $(".sub-menu"),
	 	navbarSubmenu = $(".navbar-nav .sub-menu"),
	 	hamburgerIcon = $(".hamburgerIcon"),
	 	inputField 	  = $("input"),
	 	textarea 	  = $("textarea"),
	 	inputGroup 	  = $(".input-group"),
	 	headerHeight  = header.innerHeight(),
		windowHeight  = $(window).height(),
		windowWidth   = $(window).width(),
		fitscreen	  = windowHeight - headerHeight;

	animatedHeader();
	headerTopSpacing();
	fullscreen();
	bookingForm();
	overlay();
	eventCountdown();
	//removePlaceholder();
	animatedInput();
	owlCarousel();
	slickCarousel();
	productRadioButton();
	productQuantityButton();
	woocommerceInfoToggle();
	twitterFeedsWidget();
	eventAccordion();
	wowJS();
	contactFormValidation();

	// load instragram feed is this page has instragram
	if ( $(".site-content").hasClass("instagram") ) {
		footerIntagram();
	}

	hamburgerIcon.on("click", function() {
		$(this).toggleClass("open");
		$(this).next(navbarNav).slideToggle();
		$(this).closest(".header-inner").toggleClass("expand");
	});

	/**------------------------------------------------
		Initiating libraries
	--------------------------------------------------**/
	$(".sticky-js").sticky();
	$(".selectize").selectize();

	/**------------------------------------------------
		recall function when window size changed
	--------------------------------------------------**/
	$(window).on("resize", function() {
		fullscreen();
		headerTopSpacing();
	});

	/**------------------------------------------------
		recall function when window load completely
	--------------------------------------------------**/
	$(window).on("load", function() {
		parallax();
		dropdownMenu();
	});
	
	/**------------------------------------------------
		Animated Header
	--------------------------------------------------**/
	function animatedHeader() {
		$(window).on("scroll", function() {
			if ( header.hasClass("header-tp") ) { // for transparent/fixed header
				if ( $(window).scrollTop() >= headerHeight + 1 ) {
					header.addClass("get-ready");
					navbarNav.addClass("idle").removeClass("light");
					navbarSubmenu.addClass("submenu-sticky");
					hamburgerIcon.removeClass("light");
				} else {
					header.removeClass("get-ready");
					navbarNav.addClass("light").removeClass("idle");
					navbarSubmenu.removeClass("submenu-sticky");
					hamburgerIcon.addClass("light");
				}
				if ( $(window).scrollTop() >= headerHeight + 2 ) {
					header.addClass("is-sticky");
				} else {
					header.removeClass("is-sticky");
				}
			} else if ( header.hasClass("bottom-header") ) { // if header start just after slider/banner
				if ( $(window).scrollTop() >= windowHeight ) {
					header.addClass("get-ready is-sticky");
					navbarNav.addClass("idle");
					navbarSubmenu.addClass("submenu-sticky");
				} else {
					header.removeClass("get-ready is-sticky");
					navbarNav.removeClass("idle");
					navbarSubmenu.removeClass("submenu-sticky");
				}
			} else {
				if ( $(window).scrollTop() >= 1 ) {
					header.addClass("get-ready is-sticky");
					navbarNav.addClass("idle");
					navbarSubmenu.addClass("submenu-sticky");
				} else {
					header.removeClass("get-ready is-sticky");
					navbarNav.removeClass("idle");
					navbarSubmenu.removeClass("submenu-sticky");
				}
			}
		});
	}
	
	/**------------------------------------------------
		Header top Spacing
	--------------------------------------------------**/
	function headerTopSpacing() {
		if ( windowWidth <= 768 ) {
			$(".top-spacing-xs").css("padding-top", headerHeight);
		}
	}

	/**------------------------------------------------
		Dropdown Menu
	--------------------------------------------------**/
	function dropdownMenu() {
		if ( windowWidth > 768 ) {
	        navbarLI.hover (function() {
                if ( header.hasClass("header-simple") ) {
                	$(this).children(".sub-menu").stop(true, false, true).slideToggle(300);
                } else {
                	$(this).children(".sub-menu").stop(true, false, true).fadeToggle(300);
                }
	        });
	    } else {
	    	navbarAnchor.each(function(e) {
	    		if ( $(this).next().is("ul") ) {
	    			$(this).on("click", function(event) {
	    				event.preventDefault();
		    			$(this).next("ul").slideToggle("fast");
	    			});
	    			$(this).next("ul").find("a").on("click", function(event) {
	    				$(this).closest(".sub-menu").slideUp(300);
	    			});
	    		}
	    	});
	    }
	}
	
	/**------------------------------------------------
		fullscreen function
	--------------------------------------------------**/
	function fullscreen() {
		$(".fullscreen").css("height", windowHeight);
		$(".halfscreen").css("height", windowHeight / 2);
		$(".fitscreen").css("height", fitscreen);
	}
	
	/**------------------------------------------------
		Booking Form
	--------------------------------------------------**/
	function bookingForm() {
		$(".booking-form-container .toggle-form").on("click", function() {
			$(this).next(".booking-form").slideToggle(300);
			$(this).toggleClass("active");
			$(this).children("i").toggleClass("cpi-caret-up");
			$(this).closest(".booking-form-container").toggleClass("active");
		});
	}
	
	/**------------------------------------------------
		overlay color
	--------------------------------------------------**/
	function overlay() {
		$("[data-bg-color], [data-opacity]").each(function() {
			var overlayColor = $(this).attr("data-bg-color");
			var overlayOpacity = $(this).attr("data-opacity");
			$(this).css({
				backgroundColor: overlayColor,
				opacity: overlayOpacity
			});
			$(this).removeAttr("data-bg-color data-opacity");
		});
	}

	/**------------------------------------------------
		jQuery Parallax
	--------------------------------------------------**/
	function parallax() {
		$(".parallax-1").parallax("50%", 0.5);
		$(".parallax-2").parallax("50%", 0.5);
		$(".parallax-3").parallax("50%", 0.5);
		$(".parallax-4").parallax("50%", 0.5);
	}
	
	/**------------------------------------------------
		Event Countdown
	--------------------------------------------------**/
	function eventCountdown() {
		$(".event-countdown").countdown('2018/01/01', function(event) {
		  	$(this).html(event.strftime(''+
		    	'<div class="time-slot"><span class="time">%D</span> <span class="time-label">Days</span></div>'+
		    	'<div class="time-slot"><span class="time">%H</span> <span class="time-label">Hours</span></div>'+
		    	'<div class="time-slot"><span class="time">%M</span> <span class="time-label">Mins</span></div>'+
		    	'<div class="time-slot"><span class="time">%S</span> <span class="time-label">Secs</span></div>'
		    ));
		});
		//$(".event-countdown").countdown("stop");
	}
	
	/**------------------------------------------------
		remove placeholder
	--------------------------------------------------**/
	function removePlaceholder() {
	    inputField.focusin(function(){
	        inputField.data("holder", $(this).attr("placeholder"));
	        $(this).attr("placeholder", "");
	    });
	    inputField.focusout(function(){
	        $(this).attr("placeholder", $(this).data("holder"));
	    });
	    textarea.focusin(function(){
	        textarea.data("holder", $(this).attr("placeholder"));
	        $(this).attr("placeholder", "");
	    });
	    textarea.focusout(function(){
	        $(this).attr("placeholder", $(this).data("holder"));
	    });
	}

	/**------------------------------------------------
		animated input / material input
	--------------------------------------------------**/
	function animatedInput() {
		inputGroup.each(function() {
			$(this).find("input, textarea, .submit").focusin(function() {
				$(this).parent(inputGroup).addClass("active");
			});
			$(this).find("input, textarea, .submit").focusout(function() {
				if ( $(this).val().length === 0 ) {
					$(this).parent(inputGroup).removeClass("active");
				}
			});
		});
	}

	/**------------------------------------------------
		All Owlcarousel
	--------------------------------------------------**/
	function owlCarousel() {
		$(".sponsor-carousel").owlCarousel({
			dots: false,
			margin: 30,
			autoplay: true,
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 3
				},
				1024: {
					items: 4
				},
				1280: {
					items: 5
				}
			}
		});
		$(".testimonial-carousel").owlCarousel({
			nav: false,
			items: 1,
			autoplay: true
		});
		$(".widget-carousel").owlCarousel({
			nav: false,
			items: 1,
			//autoplay: true
		});
		$(".shop-slider").owlCarousel({
			nav: false,
			items: 1,
			autoplay: true,
			loop: true,
			smartSpeed: 900,
			animateOut: "fadeOut",
			autoplayTimeout: 3000
		});
		$(".product-carousel").owlCarousel({
			nav: true,
			loop: true,
			center: true,
			dots: false,
			margin: 30,
			//autoplay: true,
			smartSpeed: 900,
			autoplayTimeout: 3000,
			navText: ['<i class="cpi cpi-long-arrow-left"></i>','<i class="cpi cpi-long-arrow-right"></i>'],
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				1024: {
					items: 3
				}
			}
		});
		$(".single-product-gallery").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			mouseDrag: false,
			smartSpeed: 700
		});
	}

	/**------------------------------------------------
		All Swiper Slider
	--------------------------------------------------**/
	function slickCarousel() {
        $(".speaker-top").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: ".speaker-thumbs"
        });
        $(".speaker-thumbs").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".speaker-top",
            dots: true,
            arrows: false,
            centerMode: true,
            centerPadding: 0,
            focusOnSelect: true
        });
	}

	/*----------------------------------------
		product radio button
	------------------------------------------*/
	function productRadioButton() {
		$(".product-radio").each(function() {
			var colorCode = $(this).children("label").attr("data-color-code");
			var colorName = $(this).children("label").attr("data-color-name");
			$(this).css("border-color", colorCode);
			$(this).children("label").css("background-color", colorCode);

			$(this).children("input").on("click", function() {
				$(this).closest(".colors").children("p").children(".selected-color").text(colorName)
			});
		});
	}

	/*----------------------------------------
		product Quantity
	------------------------------------------*/
	function productQuantityButton() {
		$(".quantity-field .add").on("click", function (e) {
		    $(this).prev().val(+$(this).prev().val() + 1);
		});
		$(".quantity-field .sub").on("click", function (e) {
		    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		});
	}

	/**------------------------------------------------
		WooCommerce Toggle
	--------------------------------------------------**/
	function woocommerceInfoToggle(){
		$(".woocommerce-info").each(function() {
			$(this).find(".woocommerce-info-toggle").on("click", function(event) {
				event.preventDefault();
				$(this).next("form").slideToggle();
			});
		});

		$(".create-account label").on("click", function() {
			$(this).closest(".create-account").next(".password-field").slideToggle();
		});

		$(".diff_shipping_address").on("click", function() {
			$(this).closest(".custom-checkbox").next(".diff-shipping-address").slideToggle();
		});

		$(".wc_payment_method .custom-radio label").each(function() {
			$(this).on("click", function() {
				$(".wc_payment_method .payment_box").slideUp();
				$(this).closest(".custom-radio").next(".payment_box").slideDown();
			});
		});
	}

	/**------------------------------------------------
		Twitter feed widget
	--------------------------------------------------**/
	function twitterFeedsWidget() {
		$(".twitter-feed-widget").twittie({
		    count: 3,
		    dateFormat: "%B %d, %Y",
		    apiPath: "libs/api/tweet.php",
		    template: "<p class='icon fz-18 primary-color'><i class='cpi cpi-twitter'></i></p><p class='tweet'>{{tweet}}</p><time datetime='{{date}}'>{{date}}</time>"
		}); 
	}

	/**------------------------------------------------
		Event Accordion
	--------------------------------------------------**/
	function eventAccordion() {
		$(".event-accordion").each(function() {
			$(this).hover(function() {
				$(this).find(".accordion-body").stop(true, false, true).slideToggle(300);
			});
		});
	}

	/**------------------------------------------------
		Wow JS
	--------------------------------------------------**/
	function wowJS() {
		var wow = new WOW({
		    boxClass:     "wow",      // animated element css class (default is wow)
		    mobile:       false       // trigger animations on mobile devices
		});
		wow.init();
	}

	/**------------------------------------------------
		Instagram feed
	--------------------------------------------------**/
	function footerIntagram(){
        var feed = new Instafeed({
        	target: "footer-ig-stream",
            get: "user",
            limit : 6,
            resolution: 'standard_resolution',
            userId: 2159114835,
            accessToken: "2159114835.9e667eb.7a37f9b944ea4023b94541c661cbf43d",
            template: '<a href="{{image}}" class="mfp-ig-popup" data-effect="mfp-zoom-in" title="{{title}}"><img src="{{image}}" alt="{{caption}}"></a>',
            after: function() {
            	$(".mfp-ig-popup").magnificPopup({
                    type: "image",
                    removalDelay: 500, //delay removal by X to allow out-animation
                    image: {
                        cursor: null
                    },
                    gallery: {
                        enabled: true // set to false to disable gallery
                    },
                    callbacks: {
                        beforeOpen: function() {
                            // just a hack that adds mfp-anim class to markup 
                            this.st.image.markup = this.st.image.markup.replace("mfp-figure", "mfp-figure mfp-with-anim");
                            this.st.mainClass = this.st.el.attr("data-effect");
                        }
                    },
                    midClick: true
            	});
            }
        });
        feed.run();
	}


	/**------------------------------------------------
		Magnific Popup
	--------------------------------------------------**/
	function magnificPopup(){
		$(".mfp-image").magnificPopup({
	        
		});
	}


	/**------------------------------------------------
		contact form validation
	--------------------------------------------------**/
	function contactFormValidation() {
		$(".contact-form").validate({
		    rules: {
		        fname: {
		            required: true
		        },
		        lname: {
		            required: true
		        },
		        email: {
		            required: true,
		            email: true
		        },
		        phone: {
		            required: true,
		            number: true
		        },
		        message: {
		            required: true
		        }
		    },
		    messages: {
		        fname: {
		            required: "First name is required"
		        },
		        lname: {
		            required: "Last name is required"
		        },
		        email: {
		            required: "No email, no support"
		        },
		        phone: {
		            required: "Phone number is required"
		        },
		        message: {
		            required: "You have to write something to send this form"
		        }
		    },
		    submitHandler: function(form) {
		        $(form).ajaxSubmit({
		            type: "POST",
		            data: $(form).serialize(),
		            url : "mail.php",
		            success: function() {
		                $(".contact-form .msg-success").slideDown()
		                $(".contact-form").resetForm();
		            },
		            error: function() {
		                $(".contact-form .msg-failed").slideDown();
		            }
		        });
		    },
		    errorPlacement: function(error, element) {
		        element.after(error);
		        error.hide().slideDown();
		    }
		});
	}

})(jQuery);