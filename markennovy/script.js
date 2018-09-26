/*function ordenar(){
    $.ajax({
        data:  $("#form_ordenar").serialize(),
        url:   'ordenar.php', //archivo que recibe la peticion
        type:  'post',
        enctype:'multipart/form-data', //método de envio
        beforeSend: function () {
                $("#cargado").html("<img src='cargando.gif' alt='Cargando, espera por favor...' width='100' height='100'>   Cargando, espere por favor...");
        },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                $("#cargado").html(response);
        },
		error: function (xhr, ajaxOptions, thrownError) {
			$("#cargado").html("<br><div class='alert alert-danger' role='alert'><i class='fas fa-plug'></i> Error en la conexión, por favor contacta con T.I</div>");
		}
    });
}*/

$(document).ready(function(e){
    $("#form_ordenar").on('submit', function(e){
        e.preventDefault();
swal({
  title: "Desea crear la orden?",
  text: "Si acepta se creará la orden y recibirá un correo de notificación!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    //--------ajax envia los datos
    $.ajax({
            type: 'POST',
            url: 'ordenar.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#btnenv').attr("disabled","disabled");
                $('#form_ordenar').css("opacity",".5");
                $("#cargado").html("<img src='cargando.gif' alt='Cargando, espera por favor...' width='100' height='100'>   Cargando, espere por favor...");
            },
            success: function(response){
                $("#cargado").html(response);
                $('#form_ordenar')[0].reset();
                $('#form_ordenar').css("opacity","");
                $("#btnenv").removeAttr("disabled");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $("#cargado").html("<br><div class='alert alert-danger' role='alert'><i class='fas fa-plug'></i> Error en la conexión, por favor contacta con T.I</div>");
            }
        });

  } else {
    //swal("Your imaginary file is safe!");
  }
});





        
    });
    
    //file type validation
    /*$("#upl").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["application/docx"];
        if(!((imagefile==match[0]))){
            alert('Por favor selecciona un archivo PDF.');
            $("#upl").val('');
            return false;
        }
    });*/
});