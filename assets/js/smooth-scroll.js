/* SMOOTH SCROLL */
// Function to animate the scroll
var smoothScroll = function (anchor, duration) {
	var startLocation = window.pageYOffset;
	var endLocation = function (anchor) {
		var distance = 0;
		if (anchor.offsetParent) {
			do {
				distance += anchor.offsetTop;
				anchor = anchor.offsetParent;
			} while (anchor);
		}
		return distance - 27;
	};
	var distance = endLocation(anchor) - startLocation;
	var increments = distance / (duration / 16);
	var timeLapsed = 0;
	var percentage, position, stopAnimation;

	var animateScroll = function () {
		timeLapsed += 24;
		percentage = ( timeLapsed / duration );
		percentage = ( percentage > 1 ) ? 1 : percentage;
		position = startLocation + ( distance * percentage );
		window.scrollTo(0, position);
		stopAnimation();
	};

	if ( increments >= 0 ) { // If scrolling down
		stopAnimation = function () {
			var travelled = window.pageYOffset;
			if ( (travelled >= (endLocation(anchor) - increments)) || ((window.innerHeight + travelled) >= document.body.offsetHeight) ) {
				clearInterval(runAnimation);
			}
		};
	} else { // If scrolling up
		stopAnimation = function () {
			var travelled = window.pageYOffset;
			if ( travelled <= endLocation(anchor) || travelled <= 0 ) {
				clearInterval(runAnimation);
			}
		};
	}

	// Loop the animation function
	var runAnimation = setInterval(animateScroll, 24);

};

[].forEach.call(document.querySelectorAll('a[href*="#"]'), function (anchor) {

	anchor.addEventListener('click', function(e) {
		// Prevent the default link behavior
		e.preventDefault();
		// Get anchor link and calculate distance from the top
		var dataID = this.getAttribute('href');
		var dataTarget = document.querySelector(dataID);
		var typeNav = this.parentNode.parentNode.parentNode.className;



		// If the anchor exists
		if (dataTarget) {
			// Scroll to the anchor
			smoothScroll(dataTarget, 300, typeNav);
		}
	});

});
/* END SMOOTH SCROLL */