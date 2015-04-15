$(document).ready(function(){
	
	// Activate PrettyPhoto
	$("a[rel^='prettyPhoto']").prettyPhoto({
		animationSpeed: 'normal', // fast/slow/normal
		padding: 40, // padding for each side of the picture
		opacity: 0.35, // Value betwee 0 and 1
		showTitle: true, // true/false
		counter_separator_label: '/', // The separator for the gallery counter 1 "of" 2
		theme: 'light_rounded', // light_rounded / dark_rounded / light_square / dark_square
		callback: function(){}
	});
	
	// Ajax Submit
	// Full documentation on this can be found at http://www.position-absolute.com/articles/jquery-form-validator-because-form-validation-is-a-mess/
	$("#contactform").validationEngine({
		ajaxSubmit: true,
			ajaxSubmitFile: "../includes/ajaxSubmit.php", // form processing file
			ajaxSubmitMessage: "Thank you, we received your information!", // success message
		success :  false,
		failure : function() {}
	});
	
	$(".widget:first").addClass("first");
	$(".widget li:last").addClass("item-last");
	$("#related li:last").addClass("item-last");
	$("#footerwidgets .singlecol:last").addClass("last");
	
});