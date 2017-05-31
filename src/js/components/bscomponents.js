/**
 * настройка bootstrap компонентов
 * @example
 * BSComponents.init();
 */
function init(){
    
	if(!Main.DeviceDetection.isMobile()) {
		$('.collapse.collapse-mobile').removeClass('collapse show');
		$('[data-toggle="collapse"]').on('click', function(e){
			if($(this).attr('data-collapse') == 'xs-only'){
				$(this).off('.collapse', false);
				$(this).removeAttr('data-toggle');
			}
		});
	}
	
	$('[data-dismiss="collapse"]').on('click', function(){
		$(this).closest('.collapse').collapse('hide');
	});
}

module.exports = {init};