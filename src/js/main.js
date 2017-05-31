let DeviceDetection = require("./components/device-detection");
let Togglers = require("./components/togglers");
let BSComponents = require("./components/bscomponents");

$(document).ready(function(){
	
	DeviceDetection.run();
	Togglers.init();
	BSComponents.init();
	
	
	
});


/**
 * Список экспортируемых модулей, чтобы иметь к ним доступ извне
 * @example
 * Main.Form.isFormValid();
 */
module.exports = {
   DeviceDetection,
   Togglers,
   BSComponents
};