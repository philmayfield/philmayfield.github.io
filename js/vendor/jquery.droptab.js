(function($){
	$.fn.droptab = function(options){
		var settings = $.extend({
			// Defaults
			breakWidth : '640',
			selectBoxClass : 'droptab-selector',
			selectCurrent : 'droptab-select-current',
			selectButton : 'droptab-select-button',
			activeClass : 'active'
		}, options);

		var droptab = this,
			breakWidth = settings.breakWidth,
			loc = getLoc(breakWidth,''),
			selectBoxClass = settings.selectBoxClass;

		// Set up selector structure
		this.before('<div class="'+settings.selectBoxClass+'"><span class="'+settings.selectCurrent+'"></span><span class="'+settings.selectButton+'"></span></div>');

		// Set the content of the selector to whichever li has the activeClass
		this.siblings('.'+settings.selectBoxClass).find('.'+settings.selectCurrent).text(this.find('.'+settings.activeClass).find('a').text());

		this.siblings('.'+settings.selectBoxClass).find('.'+settings.selectCurrent)

		// Get the size on screen resize
		$(window).on('resize',function(){
			loc = getLoc(breakWidth, loc);
			console.log(loc);
		});

		function getLoc(breakWidth, loc){
			var w = $(window).width();
			if(w < breakWidth){
				if(loc == 'L' || loc == ''){
					loc = 'S';
				}
				droptab.css('height',0);
			}else{
				if(loc == 'S' || loc == ''){
					loc = 'L';
				}
				droptab.css('height','auto');
			}
			return loc;
		};

		console.log(this);
		console.log(breakWidth);

	};
}(jQuery));