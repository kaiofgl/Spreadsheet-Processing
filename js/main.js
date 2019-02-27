$('#my-file').on("change", function(){ 
	var nome_arquivo = $('#my-file')[0].files[0];
	$('.h3-arraste').html(nome_arquivo.name);
	$('.h3-arraste').css('margin-top', '10px');
	$('.img-excel').css('opacity', '1');
	$('.img-excel').css('display', 'inline-block');
; });