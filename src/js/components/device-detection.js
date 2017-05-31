let breakpoints = {
	sm: 576,
	md: 768,
	lg: 992,
	xl: 1200
};

function isMobile(){
	if($(window).width() <= breakpoints.sm){
		return true;
	} else {
		return false;
	}
}
function isTablet(){
	if($(window).width() > breakpoints.sm && $(window).width() <= breakpoints.md){
		return true;
	} else {
		return false;
	}
}
function isTouch(){
	return 'ontouchstart' in window || navigator.maxTouchPoints;
}

function run(){
	if(isTouch()){
		$('html').removeClass('no-touch').addClass('touch');
	} else {
		$('html').removeClass('touch').addClass('no-touch');
	}
}

module.exports = {run, isTouch, isMobile, isTablet};