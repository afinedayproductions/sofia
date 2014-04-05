/* NAV.FIXED */
var header = document.querySelector('header');
var nav = document.querySelector('nav');
var navOffset = nav.offsetTop;
var navHeight = nav.offsetHeight;
var spanNavFixed = document.createElement('span');

window.addEventListener('scroll', function() {
	var scroll = window.pageYOffset;

	if(scroll > navOffset) {
		header.style.position = 'relative';
		nav.classList.add('fixed');
		spanNavFixed.style.display = 'block';
		spanNavFixed.style.height = navHeight+'px';
		nav.parentNode.insertBefore(spanNavFixed, nav.nextSibling);
	}
	else {
		nav.classList.remove('fixed');
		header.style.position = 'fixed';
		spanNavFixed.style.height = '0px';
	}
});
/* END NAV.FIXED */