$(function(){

	$('.btn_confirm').on('click', function(){
		if(document.getElementById('doi').checked == false){
			alert('「お問い合わせをいただく前の注意」に同意の上、ご送信ください。');
			return false ;
		}
	});

});
