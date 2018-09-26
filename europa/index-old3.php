<?php $idord= round(microtime(true) * 1000);
//echo "$idord";
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!--alertas framework-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="apple-icon.ico">
  <link rel="icon" type="image/png" href="favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Europa Scleral
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../markennovy/css/material-kit.css?v=2.0.3" rel="stylesheet" />
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script type="text/javascript">var milisec = tmpDate.getTime();</script>
</head>
<a class="btn btn-link" href="../">
  <i class="material-icons">arrow_back_ios</i> ir atras
</a>
<br><header><h2><b>Europa Scleral</b></h2></header>
<body class="index-page sidebar-collapse">

<div style="margin: 50px">
<div class="card mb-3">
  <img class="card-img-top" src="images/portada-europa.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Parámetros</h4>
    <table>
      <tr><th>Base Curva:</th><td>Cualquiera</td></tr>
      <tr><th>Diámetro:</th><td>16.0 – 18.0 – 20.00</td></tr>
      <tr><th>Poderes BV:</th><td>A la medida</td></tr>
      <tr><th>Ciloindro:</th><td>-0.25D to -15.00D (Pasos de 25)</td></tr>
      <tr><th>Eje:</th><td>1° to 180° (Pasos de 1)</td></tr>
      <tr><th>Add:</th><td>+1.00, +1.50, + 2.00, +2.50, +3.00, +3.50 (Pasos de 50)</td></tr>
    </table>
    <p class="card-text"><small class="text-muted">Todos los lentes son tratados con plasma para asegurar humectación de la superficie.</small></p>
    <a href="./FORMATO_PDF PARA_PEDIDOS.pdf" class="btn btn-primary" download>Descargar formulario</a>
          <a href="./LENTES_DE CONTACTO_EUROPA.pdf" class="btn btn-info" download>Descargar ficha técnica</a>
  </div>
</div>
</div>




  <!--   Core JS Files   -->
  <script src="../markennovy/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../markennovy/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../markennovy/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../markennovy/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../markennovy/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../markennovy/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../markennovy/js/material-kit.js?v=2.0.3" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }


  </script>
</body>
  <!-- drop n drag upload-->
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="estilo.css">

</html>