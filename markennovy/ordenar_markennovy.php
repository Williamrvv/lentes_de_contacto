<?php $idord= round(microtime(true) * 100);
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
    Mark'ennovy
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../markennovy/css/material-kit.css?v=2.0.3" rel="stylesheet" />
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<a class="btn btn-link" href="../">
  <i class="material-icons">arrow_back_ios</i> ir atras
</a>
<br><header><h2><b>Crear orden Mark'ennovy</b></h2></header>
<body class="index-page sidebar-collapse">


<form id="form_ordenar" style="margin:25px" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col">
      <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required="">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="cedula" placeholder="Cedula juridica o física" required="">
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <input type="file" id="upl" name="upl" accept=".docx, .doc" required=""><br>
          <center><button type="submit" onclick="ordenasr()" id="btnenv" class="btn btn-primary">Enviar</button></center>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
</form>
<center><div id="cargado"></div></center>


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