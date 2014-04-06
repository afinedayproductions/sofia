var Work_poster = function() { this.init.apply(this, arguments); };
Work_poster.prototype = {
	init: function(slider) {
		this.ul = slider.children[0];
		this.li = this.ul.children;

		this.ul.style.width = (this.li[0].offsetWidth * this.li.length) + 'px';
		this.currentIndex = 0;
	},

	goTo: function(index) {
		// filter invalid indices
		if (index < 0 || index > this.li.length - 1)
			return;

		this.ul.style.left = '-' + (100 * index) + '%';
		this.currentIndex = index;
	},

	goToPrev: function() {
		this.goTo(this.currentIndex - 1);
	},

	goToNext: function() {
		this.goTo(this.currentIndex + 1);
	}
};


// Handle slider init + slider HTML handler
var sliders = [];
[].forEach.call(document.querySelectorAll('.work-poster'), function(el) {
	// Init each slider
	sliders.push(new Work_poster(el));

	// Get the attached handler
	var handler = el.querySelector('.work-poster-handler');
	// For each click on a btn in the HTML handler
	[].forEach.call(handler.querySelectorAll('div'), function(item) {

		// Get the index of the btn
		item.index = item.getAttribute('data-index');
		// Go to the index image
		item.addEventListener('click', function() {
			// Change the selected item
			[].forEach.call(handler.querySelectorAll('div'), function(div) {
				div.className = '';
			});
			item.className = 'selected';
			// Slide it
			handlerGoTo(item.index);
		}, false);

	});
});

function handlerGoTo(index) {
	// Only one slider here. Do not handle multiple sliders in one page
	sliders[0].goTo(index);
}