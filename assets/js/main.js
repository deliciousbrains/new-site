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

		},


		popover : function() {

			// remove this so the cookie persists.
			// just here for testing.
			$.removeCookie("no_subscribe_popover");

			if ( "undefined" == typeof $.cookie("no_subscribe_popover") ) {
				var close = $('<a class="well__close" href="#0"><svg class="icon icon-close"><use xlink:href="#icon-close"></use></svg></a>');

				BRAINS.subscribe
					.addClass("fixed")
					.detach()
					.appendTo(".site__content")
					.append(close);

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
			el.find('.accordion__title').on( 'click', function() {
				var $this   = $(this),
						img_url = $this.next().data('image'),
						img     = el.find('.accordion__image');

				//Expand or collapse this panel
				$this.toggleClass('open').next().toggleClass('open');

				img.prop('src', img_url);

				//Hide the other panels
				el.find('.open').not($this).not($this.next()).removeClass('open');

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