
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Nav Toggle
		-------------------------------------------*/

		// Notes...


		$('.primary-navigation').find('.toggle').click(function() {

			$(this).toggleClass('active');

			$('.primary-navigation-container').toggleClass('open');

		});

		/*-------------------------------------------
			Details Toggle
		-------------------------------------------*/

		// Notes...

		$('.details-navigation').find('.toggle').click(function() {

			$(this).toggleClass('active');

			$('.details-navigation-container').toggleClass('open');

		});

		/*-------------------------------------------
			Details Tabs
		-------------------------------------------*/

		// Notes...

		var Tabs = {

			init: function() {

				this.bindUIfunctions();
				this.pageLoadCorrectTab();

			},

			bindUIfunctions: function() {

				// Delegation

				$(document).on("click", ".transformer-tabs a[href^='#']:not('.active')", function(event) {

					Tabs.changeTab(this.hash);
					event.preventDefault();

				}).on("click", ".transformer-tabs a.active", function(event) {

					Tabs.toggleMobileMenu(event, this);
					event.preventDefault();

				});

			},

			changeTab: function(hash) {

				var anchor = $("[href=" + hash + "]");
				var div = $(hash);

				// activate correct anchor (visually)

				anchor.addClass("active").parent().siblings().find("a").removeClass("active");

				// anchor.parent().addClass('active').siblings().removeClass('active');

				// activate correct div (visually)

				div.addClass("active").siblings().removeClass("active");

				// update URL, no history addition

				window.history.replaceState("", "", hash);

				// Close menu, in case mobile

				anchor.closest("ul").removeClass("open");

			},

			// If the page has a hash on load, go to that tab

			pageLoadCorrectTab: function() {

				this.changeTab(document.location.hash);

			},

			toggleMobileMenu: function(event, el) {

				$(el).closest("ul").toggleClass("open");

			}

		}

		Tabs.init();

		/*-------------------------------------------
			Financials Tabs (Primary Navigation)
		-------------------------------------------*/

		// Notes...

		//  When user clicks on tab, this code will be executed

		$(".financials-primary-navigation li").click(function() {

			//  First remove class "active" from currently active tab

			$(".financials-primary-navigation li").removeClass('active');

			//  Now add class "active" to the selected/clicked tab

			$(this).addClass("active");

			//  Hide all tab content

			$(".financials-topic").hide();

			//  Here we get the href value of the selected tab

			var selected_tab = $(this).find("a").attr("href");

			//  Show the selected tab content

			$(selected_tab).show();

			//  At the end, we add return false so that the click on the link is not executed

			return false;

		});

		/*-------------------------------------------
			Financials Tabs (Secondary Navigation)
		-------------------------------------------*/

		// Notes...

		$('.financials-secondary-navigation').find('li').click(function() {

			$(this).addClass('active').siblings().removeClass('active');

			// If Annual is selected...

			if ( $(this).hasClass('view-by-annual') ) {

				$('.financials-topic-timeframe-annual').addClass('financials-topic-timeframe-active');

				$('.financials-topic-timeframe-quarterly').removeClass('financials-topic-timeframe-active');

			// If Quarterly is selected...

			} else {

				$('.financials-topic-timeframe-quarterly').addClass('financials-topic-timeframe-active');

				$('.financials-topic-timeframe-annual').removeClass('financials-topic-timeframe-active');

			}

		});

		/*-------------------------------------------
			Responsive Tables
		-------------------------------------------*/

		// Notes...

		var switched = false;
		var updateTables = function() {
		if (($(window).width() < 800) && !switched ){
		switched = true;
		$("table.responsive").each(function(i, element) {
		splitTable($(element));
		});
		return true;
		}
		else if (switched && ($(window).width() > 800)) {
		switched = false;
		$("table.responsive").each(function(i, element) {
		unsplitTable($(element));
		});
		}
		};

		$(window).load(updateTables);
		$(window).on("redraw",function(){switched=false;updateTables();}); // An event to listen for
		$(window).on("resize", updateTables);


		function splitTable(original)
		{
		original.wrap("<div class='table-wrapper' />");

		var copy = original.clone();
		copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
		copy.removeClass("responsive");

		original.closest(".table-wrapper").append(copy);
		copy.wrap("<div class='pinned' />");
		original.wrap("<div class='scrollable' />");

		setCellHeights(original, copy);
		}

		function unsplitTable(original) {
		original.closest(".table-wrapper").find(".pinned").remove();
		original.unwrap();
		original.unwrap();
		}

		function setCellHeights(original, copy) {
		var tr = original.find('tr'),
		tr_copy = copy.find('tr'),
		heights = [];

		tr.each(function (index) {
		var self = $(this),
		tx = self.find('th, td');

		tx.each(function () {
		var height = $(this).outerHeight(true);
		heights[index] = heights[index] || 0;
		if (height > heights[index]) heights[index] = height;
		});

		});

		tr_copy.each(function (index) {
		$(this).height(heights[index]);
		});
		}









		/*-------------------------------------------
			Search Toggle
		-------------------------------------------*/

		// Notes...


		// $('.global-search').find('label').click(function() {

		// 	$(this).toggleClass('active');

		// 	$(this).next('div').toggleClass('open');

		// });

		/*-------------------------------------------
			Sample Smooth Scroll Structure
		-------------------------------------------*/

		// Notes...


		// $('.answers .top a').smoothScroll({

			// offset: -20

		// });

		/*-------------------------------------------
			Open External Links in New Window
		-------------------------------------------*/

		// Notes...

		// $('a').each(function() {

		// 	var external_url = new RegExp('/' + window.location.host + '/');

		// 	if (!external_url.test(this.href)) {

		// 		$(this).addClass('external');

		// 		$(this).click(function(event) {

		// 			event.preventDefault();
		// 			event.stopPropagation();

		// 			window.open(this.href, '_blank');

		// 		});

		// 	}

		// });

		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		// $("body").addClass("dev");


		// Displays screen size on the fly.


		// var windowWidth = $(window).width();

		// var windowHeight = $(window).height();

		// $(".footer").after('<div id="dev"></div>');

		// $("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Title
		-------------------------------------------*/

		// Notes...


		/*-------------------------------------------
			Slideshow
		-------------------------------------------*/

		// Notes...


		// $(".flexslider").flexslider({

			// animation: "fade",
			// slideshowSpeed: 7000,
			// useCSS: true,
			// controlNav: false,
			// directionNav: true,
			// smoothHeight: true,

			// start: function(slider){

				// $("body").removeClass("loading");

			// }

		// });

	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		// var windowWidth = $(window).width();

		// var windowHeight = $(window).height();

		// $("#dev").text(windowWidth + ' ' + 'W' + ' ' + '/' + ' ' + windowHeight + ' ' + 'H');


	});


})(window.jQuery);
