$(document).ready(function(){
    $('a[data-confirm]').click(function(){

    	var href = $(this).attr('href');

    	$('#data-confirm').attr('href', href);
    	$('#confirm-delete').modal({show:true});

    	return false;

    });
});