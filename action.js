a("body.single-post").each(function() {
			var b = a(".subscribe")
			  , e = a("form", b);
			if (a(".actions", b).prepend('<div class="striping"><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i><b>/</b><i>/</i></div>'),
			d(e),
			c(e),
			!(a(document).width() < 480)) {
				var f = a(".entry-content p")
				  , g = f.size()
				  , h = g - 3;
				0 > h && (h = 0);
				var i = f.eq(h)
				  , j = i.offset()
				  , k = j.top
				  , l = !1;
				"undefined" == typeof a.cookie("no_subscribe_popover") && a(window).scroll(function() {
					if (!(l || a(window).scrollTop() + a(window).height() < k)) {
						var b = a(".subscribe")
						  , e = b.clone();
						b.hide(),
						e.removeClass("regular").addClass("popover").hide(),
						a("body").append(e);
						var f = a("form", e);
						d(f),
						c(f);
						var g = a('<a class="close" href="">&times;</a>');
						e.append(g),
						g.click(function() {
							return b.show(),
							e.hide(),
							a.cookie("no_subscribe_popover", "1", {
								path: "/"
							}),
							!1
						}),
						e.css({
							bottom: -1 * e.outerHeight() + "px"
						}).show().animate({
							bottom: "0px"
						}, 500),
						l = !0
					}
				})
			}
		})
	}),