function adaptBSComponents(){
	if(!Main.DeviceDetection.isMobile()) {
		$('.collapse.collapse-mobile').removeClass('collapse show');
		$('[data-toggle="collapse"][data-collapse="xs-only"]').on('click', function(e){
			$(this).off('.collapse', false);
			$(this).removeAttr('data-toggle');
		});
	} else {
		$('.collapse-mobile').removeClass('show').addClass('collapse');
		$('[data-collapse="xs-only"]').on('click', function(e){
			if($(this).attr('data-collapse') == 'xs-only'){
				$(this).attr('data-toggle', 'collapse');
				$(this).on('.collapse', false);
			}
		});
	}
}

/**
 * настройка bootstrap компонентов
 * @example
 * BSComponents.init();
 */
function init(){
    
	adaptBSComponents();
	$(window).on('resize', function(){
		adaptBSComponents();
	});
	
	$('.collapse-modal[data-parent*="accordion"]').on('show.bs.collapse', function(e){
		//console.log('ya');
		//$('.collapse-modal').not(e.target).collapse('hide');
	});
	
	$('[data-toggle="collapse"][data-parent*="accordion"]').on('click', function(e){
		let accordionId = $(this).attr('data-parent');
		let thisBoxId = $(this).attr('data-target');
		$(accordionId).find('.collapse').not(thisBoxId).collapse('hide');
	});
	
	$('.modal-footer .collapse-modal').on('shown.bs.collapse', function(e){
		let offParent = e.target.closest('.modal');
		$(offParent).scrollTop($(offParent).outerHeight());
	});
	
	$('[data-dismiss="collapse"]').on('click', function(){
		$(this).closest('.collapse').collapse('hide');
	});
}

module.exports = {init};