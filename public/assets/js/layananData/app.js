$(function(){
    if($('.section-intro').length > 0){
        $(window).on('scroll',function(){
            if($(window).scrollTop() < $(window).height() && $(window).scrollTop() > 30){
                $('#navbar').addClass('float-hide');
            }
            else if($(window).scrollTop() > $(window).height()){
                $('#navbar').removeClass('float-hide').addClass('float');
            } else {
                $('#navbar').removeClass('float float-hide');
            }
        });
    }
});

function notifSukses(msg){
	var msg = msg || 'Link Berhasil Tersalin';
    Swal.fire({
        icon    : 'success',
        title   : false,
        text    : msg,
        showConfirmButton: false,
        timer   : 1800
    })
}

function noticeFailed(message){
	var message = message || 'Proses Gagal';

    sweetAlert({
    	title 	: 'Error',
    	text 	: message,
    	type	: 'error',
    	timer	: 2000,
    	showCancelButton : false,
    	showConfirmButton : false
    });
}