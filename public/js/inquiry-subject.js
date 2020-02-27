$(function(){
	
	//get param
	var getParam = location.search.substring(1).split('&');

	//add selected
	$('.ser-' + getParam).attr('selected','selected');

});