function previousImage(name){
	$('#'+name+'_image').data('backstretch').prev();
}

function nextImage(name){
	$('#'+name+'_image').data('backstretch').next();
}