document.getElementById('my-file').addEventListener('change', handleFileSelect, false);

$('#my-file').on("change", function(){ 
	var nome_arquivo = $('#my-file')[0].files[0];
	$('.h3-arraste').html(nome_arquivo.name);
	$('.h3-arraste').css('margin-top', '10px');
	$('.img-excel').css('opacity', '1');
	$('.img-excel').css('display', 'inline-block');
	$('#btn-enviar').css('display', 'block');
	; });

$('#btn-enviar').click(function(event) {
	window.location="processado.php";
});

// PROCESSAMENTO
var ExcelToJSON = function() {
	this.parseExcel = function(file) {
		var reader = new FileReader();
		reader.onload = function(e) {
			var data = e.target.result;
			var workbook = XLSX.read(data, {
				type: 'binary'
			});
			workbook.SheetNames.forEach(function(sheetName) {
            var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
            var json_object = JSON.stringify(XL_row_object);
            console.log(JSON.parse(json_object));
            jQuery( '.output-json' ).val( json_object );
        })
		};
		reader.onerror = function(ex) {
			console.log(ex);
		};
		reader.readAsBinaryString(file);
	};
};

function handleFileSelect(evt) {
    var files = evt.target.files;
    var xl2json = new ExcelToJSON();
    xl2json.parseExcel(files[0]);
}





