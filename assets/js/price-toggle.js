(function($) {

	var style_el = document.createElement('style'),
			range_el = document.querySelector('input[type=range]'),
			pp       = ['-webkit-slider-runnable-', '-moz-range-'],
			n_pp     = pp.length,
			plans    = document.getElementsByClassName('pricing__plan'),
			visible_plans = 2;

	document.body.appendChild(style_el);

	function show_hide_plans(value) {
		var current_items = plans[0].dataset.items,
				total_visible = 0;

		if ( window.matchMedia("(min-width: 768px) and (max-width: 1220px").matches ) {
			visible_plans = 3;
		}
		else if ( window.matchMedia("(min-width: 1220px)").matches ) {
			visible_plans = 4;
		} else {
			visible_plans = 2;
		}

		value = parseInt(value);

		// reverse the order of plans since the dom is high to low.
		for ( var i = plans.length-1; i < plans.length; i-- ) {
			var plan  = plans[i],
					items;

			// probably me being dumb, but the last item in the loop is undefined
			if ( typeof plan === 'undefined' ) {
				break;
			}

			items = parseInt(plan.dataset.items);

			if ( items >= value && total_visible <= visible_plans-1  ) {
				plan.style.display = "flex";
				//plan.style.visibility = "visible";
				total_visible++;
			} else {
				plan.style.display = "none";
				//plan.style.visibility = "hidden";
			}
		}

	}; // show hide plans



	range_el.addEventListener('input', function() {
		var sel = '.js input[type=range]',
				str = '',//sel + '::-webkit-slider-thumb::after{content:"' + parseInt(this.value).toLocaleString() + '"}',
				min = this.min || 0, max = this.max || 100,
				perc = ~~((this.value - min)/(max - min)*100);

	  // for ( var i = 0; i < n_pp; i++ ) {
	  //   str += sel + '::' + pp[i] + 'track{background-size:' + perc + '% 100%}';
	  // }

	  str += '.range-fill-tooltip::before,.range-fill-tooltip::after {left:'+perc+'%; }';
	  str += '.range-fill-tooltip::after {content: "'+parseInt(this.value).toLocaleString()+'";}';

	 show_hide_plans(this.value);

	 //console.log(str);
	  style_el.textContent = str;
	}, false);


})(jQuery);