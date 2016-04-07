// $(".slider").slick({
// 	infinite: false,
// 	slidesToShow: 1,
// 	variableWidth: false
// });

(function($) {


	var BRAINS = {

		nav_arrows : ['<svg class="icon icon-chevron-left"><use xlink:href="#icon-chevron-left"></use></svg>', '<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>'],
		subscribe : $("#subscribe"),

		init : function () {

			BRAINS.accordion( $(".how-it-works") );

			BRAINS.carousels();

			BRAINS.popover();

			BRAINS.section_links();

			BRAINS.setup_resp_nav();

			if ( typeof Tablesaw !== 'undefined' ) {
				$( document ).trigger( "enhance.tablesaw" );

				Tablesaw.config = {
				  swipe: {
				    horizontalThreshold: 15,
				    verticalThreshold: 20
				  }
				};
			}

			if ( typeof lity !== 'undefined' ) {
				$(document).on('lity:open', function(event, lightbox, trigger) {
					$(".lity-container").append( '<button class="lity-close lity-close--bottom" type="button" title="Close (Esc)" data-lity-close>close</button>' );
				});

			}

		},


		popover : function() {

			// remove this so the cookie persists.
			// just here for testing.
			$.removeCookie("no_subscribe_popover");

			if ( "undefined" == typeof $.cookie("no_subscribe_popover") ) {
				var close = $('<a class="well__close" href="#0"><svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></a>');

				if ( $(window).width() >= 1350 ) {
					BRAINS.subscribe
						.addClass("fixed")
						.detach()
						.appendTo(".site__content")
						.append(close);
				}

				$(window).resize( $.throttle( 200, function() {
					if ( $(window).width() >= 1350 ) {
						BRAINS.subscribe
							.addClass("fixed")
							.detach()
							.appendTo(".site__content")
							.append(close);
					} else {
						BRAINS.subscribe
							.removeClass("fixed")
							.detach()
							.appendTo(".blog__post");
					}
				} ) );

				close.click(function() {

					$.cookie("no_subscribe_popover", "1", {	path: "/"	});

					$(this).remove();

					BRAINS.subscribe
						.removeClass("fixed")
						.detach()
						.appendTo(".blog__post");

				});
			}

		},


		carousels : function() {
			$(".owl-carousel").owlCarousel({
				navigation : false, // Show next and prev buttons
				slideSpeed : 300,
				paginationSpeed : 400,
				singleItem:true
			});

			$(".plugin-tweets").owlCarousel({
				navigation : false, // Show next and prev buttons
				slideSpeed : 300,
				paginationSpeed : 400,
				itemsCustom: [
					[0, 1],
					[768, 2]
				],
				//items:2
			});

			var pricingCarousel = $("#pricing-carousel").owlCarousel({
				navigation : true,
				pagination: false,
				slideSpeed : 300,
				paginationSpeed : 400,
				itemsCustom: [
					[0, 1],
					[768, 2],
					[1024, 3],
					[1280, 4]
				],
				rewindNav: false,
				navigationText: BRAINS.nav_arrows,
				afterAction: function(el){

					var vis_items = this.owl.visibleItems;
					var items = this.$owlItems;

					items.removeClass('active');

					for (var i in vis_items) {
					  items.eq(vis_items[i]).addClass('active');
					}
				}
			});

			if ( $("#pricing-carousel").length ) {
				pricingCarousel = $("#pricing-carousel").data('owlCarousel');

				if ( window.matchMedia("(min-width: 1024px) and (max-width: 1280px").matches ) {
					pricingCarousel.jumpTo(3);
				}	else {
					pricingCarousel.jumpTo(4);
				}
			}
		},


		accordion : function(el) {
			var img   = el.find('.accordion__image'),
					clone = img.clone().addClass('accordion__image--hidden').insertAfter(img);

			el.find('.accordion__title').on( 'click', function() {

				var $this   = $(this),
						img_url = $this.next().data('image'),
						vis_img = el.find('.accordion__image').not('.accordion__image--hidden'),
						hid_img = el.find('.accordion__image--hidden');

				//Expand or collapse this panel
				$this
					.toggleClass('open')
					.next()
					.toggleClass('open');

				//swap image classes to get fade effect
				hid_img
					.prop('src', img_url)
					.removeClass('accordion__image--hidden');

				vis_img.addClass('accordion__image--hidden');

				//Hide the other panels
				el
					.find('.open')
					.not($this)
					.not($this.next())
					.removeClass('open');

			});
		},


		section_links : function() {

			$(".faq__category,.back_to_top,.section_link").on( 'click', function(e) {
				e.preventDefault();
				var $this  = $(this),
						href   = $this.attr('href'),
						target = $(href),
						dist   = target.offset().top - 73, // 73 is height of product nav
						speed  = ( dist / 150 ) * 100;

				if ( speed < 0 ) {
					speed = 200;
				}

				$("html,body").animate({
					scrollTop: dist
				}, speed );
			});

		},


		setup_resp_nav : function() {
			var label = "<svg class='icon icon-navicon'><use xlink:href='#icon-navicon'></use></svg> <span>Menu</span>";

			var nav = responsiveNav( "#main-nav", {
				label      : label,
				animate    : false,
				transition : 300,
				insert     : 'before',
				openPos    : 'relative',
			});

			$("#main-nav").on('click','.nav-arrow',function(e) {
				var $this = $(this);

				e.stopPropagation();
				e.preventDefault();

				$this.parent().toggleClass('open');
				$this.next().toggleClass('open');
				return false;
			});

			$("body").on('click', function(e) {

				if ( ! $("html").hasClass('js-nav-active') ) {
					return;
				}

				if ( ! $(e.target).closest('.site__nav').length ) {
					nav.close();
				}

			});


		},

	}

	BRAINS.init();

})(jQuery);




$(".menu--product").each(function() {
    var $this = $(this),
    		top   = $this.offset().top,
    		d     = function() {
        	var scrolltop = $(window).scrollTop();
	        scrolltop > top ? $this.addClass("sticky") : $this.removeClass("sticky")
			  };
    d();
    $(window).scroll( $.throttle( 200, d ) );
});