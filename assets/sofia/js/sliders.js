var Work_poster = function() { this.init.apply(this, arguments); };
Work_poster.prototype = {
	init: function(slider) {
		this.ul = slider.children[0];
		this.li = this.ul.children;

		this.resize();

		//this.ul.style.width = (this.li[0].offsetWidth * this.li.length) + 'px';
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
	},

	resize: function() {
		this.sliderWidth = document.querySelectorAll('.work-poster')[0].offsetWidth;
		this.ul.style.width = this.sliderWidth * this.li.length + 'px';

		for(var i = 0; i < this.li.length; i++) {
			this.li[i].querySelector('img').style.width = this.sliderWidth + 'px';
			this.sliderHeight = this.li[i].querySelector('img').offsetHeight;
			this.li[i].style.height = this.sliderHeight + 'px !important';
			console.log(this.sliderHeight + 'px !important');
		}
	}
};



window.addEventListener('resize', function() {
	for(var i = 0; i < sliders.length; i++)
		sliders[i].resize();
});





// Handle slider init + slider HTML handler
var sliders = [];
[].forEach.call(document.querySelectorAll('.work-poster'), function(slider) {

	// Init each slider
	var sliderObject = new Work_poster(slider);
	// Add it to the sliders array
	sliders.push(sliderObject);

	// Get the attached handler
	var handler = slider.querySelector('.work-poster-handler');
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
			sliderObject.goTo(item.index);
		}, false);

	});
});