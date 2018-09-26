<?php
setlocale(LC_ALL,"es_ES");
$tim= round(microtime(true) * 100);
$correo=$_POST['correo'];
$cedula=$_POST['cedula'];
$fecha = strftime("%A %d de %B del %Y");


$return = Array('ok'=>TRUE);

$upload_folder ='documentos';

$nombre_archivo = '('.$tim.')'.$_FILES['upl']['name'];

$tipo_archivo = $_FILES['upl']['type'];

$tamano_archivo = $_FILES['upl']['size'];

$tmp_archivo = $_FILES['upl']['tmp_name'];

$archivador = $upload_folder . '/' . $nombre_archivo;

if (!move_uploaded_file($tmp_archivo, $archivador)) {
$return = Array('ok' => FALSE, 'msg' => "Ocurrio un error al subir el archivo. No pudo guardarse.", 'status' => 'error');die();
}

//header("location: ordenget.php?url=$tim");
//$correo='wvalverde@topex-labs.com';
//echo "$correo";




 






     // primero hay que incluir la clase phpmailer para poder instanciar 
      //un objeto de la misma
      require "PHPMailer/class.phpmailer.php";


      //instanciamos un objeto de la clase phpmailer al que llamamos 
      //por ejemplo mail
      $mail = new phpmailer();

      //Definimos las propiedades y llamamos a los métodos 
      //correspondientes del objeto mail

      //Con PluginDir le indicamos a la clase phpmailer donde se 
      //encuentra la clase smtp que como he comentado al principio de 
      //este ejemplo va a estar en el subdirectorio includes
      $mail->PluginDir = "PHPMailer/";

      include "PHPMailer/smtpconf.php";
      
      //Indicamos cual es nuestra dirección de correo y el nombre que 
      //queremos que vea el usuario que lee nuestro correo
      $mail->From = "lentesdecontacto@topex-labs.com";

      $mail->FromName = "Lentes de contacto Laboratorio Topex";

      //Asignamos asunto y cuerpo del mensaje
      //El cuerpo del mensaje lo ponemos en formato html, haciendo 
      //que se vea en negrita
      $mail->Subject = "Pedido orden #($tim) Lentes Mark'ennovy";
      $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
    <style type='text/css'>
body{ margin:0px; padding:0px; width:100%; }    </style>
  </head>
  <body>
    <table align='center' bgcolor='#ebebeb' border='0' cellpadding='0' cellspacing='0' style='padding:0px; margin:0px;' width='100%'>
      <tbody>
        <tr>
          <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' width='600'><br><br>
              <tbody>
                <tr  style='display: block; width: 600px; height: 100px; background: #00bcd4; display: flex;'>
                  <td align='left' height='20' valign='top'><h1 style='padding: 30px;color: white;'>Gracias por su pedido</h1></td> <td><img src='http://www.topex-labs.com/topex-sinfondo.png' style='padding:10px;'></td>
                </tr>
               </tbody>
             </table>
                <table align='center' border='0' cellpadding='0' cellspacing='0' width='600'>
                <tbody>
                  <tr>
                    <td align='left' bgcolor='#ffffff' valign='top' style='padding:0 100px;font-family:Arial, Helvetica, sans-serif;font-size:12px;' width='600'><br>$fecha</td>
                  </tr>
                  <tr>
                    <td align='left' bgcolor='#ffffff' valign='top' style='padding:0 100px;font-family:Arial, Helvetica, sans-serif;font-size:12px;' width='600'><p style='font-size:20px;font-weight:bold;'>Orden N&uacute;mero $tim</p> <p style='font-size:12px;'>Su orden de Lentes Mark'ennovy se ha creado.</p><p>Si desea m&aacute;s detalles de su pedido por favor no dude en llamar al Laboratorio &Oacute;ptico Topex para nosotros un placer servirle.</p><p>Nuestro horario de atenci&oacute;n es de Lunes a viernes de 8:00 a.m a 7:00 p.m y s&aacute;bados de 7:00 a.m a 2:00 p.m</p>
                      <p style='text-align:right;'><a href='#' style='background-image:url(images/boton.jpg);width:153px;line-height:52px;text-align:center;display:block;color:#000000;text-decoration:none;float:right;margin-bottom:10px;'></a></a></p></td>
                  </tr>
              </tbody>
            </table>
            
                        
                        <table align='center' border='0' cellpadding='0' cellspacing='0' width='600'>
              <tbody>
                <tr>
                  <td align='left' valign='top' bgcolor='ffffff' style='padding:18px 20px 10px 20px;color:#3d3d3d;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:14px;border-top:1px solid #afafaf'><a href='http://www.topex-labs.com/' >www.topex-labs.com</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                      <a href='tel:22332010'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABl0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC4yMfEgaZUAAAEQSURBVDhPpdQxSwJhHMfxMwepQWhQg8Q5pNVFssUhnH0BvgJnwcnJqRcg6KKDe40N0ShkRFCbg6AYlQrtFn3/4MGf4znzuecLn0W5Hyf3nF6gMzxggEP5wKUSVvjd6iFyWazhj4kflBGpDvSYbwzrYviCaVAcw6oUTEPiFQewKg3T2CNOYZ3cwTf02BMSiNwN9GAfTlWhB9/hdLDjeIMebcOpK+jBDSpwqgs9Kg+rgGByMuqQm5BzHNoRnqFH5ZXUr+A5ZvC/v0USoeUwhx6Vnz9EC5/bz7QXnCA0uYsPBC/c5R47y2MK08UmC/xbBncwDWhLFLFX8hRrmMA0NoL801sn7/wlGrhGExdQx8bz/gANooC4dBvpQAAAAABJRU5ErkJggg==' width='20px' style='position: relative;top: 5px;'> 2233-2010</a>                    
                                  </td>
                </tr>
                                <tr>
                  <td align='left' height='15' valign='top'>
                    <br><br></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>";

      //Definimos AltBody por si el destinatario del correo no admite 
      //email con formato html
      $mail->AltBody ="Gracias por su pedido. Su número de orden es $tim, si necesita saber más detalles de su pedido por favor llame al 2233-2010 teléfono Laboratorio Óptico Topex";

      //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
      //una cuenta gratuita y voy a usar attachments, por tanto lo pongo a 120  
      $mail->Timeout=120;

      //Indicamos el fichero a adjuntar si el usuario seleccionó uno en el formulario
  $mail->AddAttachment($archivador);


      //Indicamos cuales son las direcciones de destino del correo y enviamos 
      //los mensajes

  $mail->AddAddress($correo);

  //se envia el mensaje, si no ha habido problemas la variable $success 
  //tendra el valor true
  $exito = $mail->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas 
  //como mucho para intentar enviar el mensaje, cada intento se hara 5 s
  //segundos despues del anterior, para ello se usa la funcion sleep
  $intentos=1; 
    while((!$exito)&&($intentos<5)&&($mail->ErrorInfo!="SMTP Error: Data not accepted")){
     sleep(5);
         //echo $mail->ErrorInfo;
         $exito = $mail->Send();
         $intentos=$intentos+1;       
    }

  //La clase phpmailer tiene un pequeño bug y es que cuando envia un mail con
  //attachment la variable ErrorInfo adquiere el valor Data not accepted, dicho 
  //valor no debe confundirnos ya que el mensaje ha sido enviado correctamente
  if ($mail->ErrorInfo=="SMTP Error: Data not accepted") {
     $exito=true;
        }
    
  if(!$exito)
  {
     echo "Problemas enviando correo electrónico a ".$correo;
     echo "<br/>".$mail->ErrorInfo; die();
  }
  else
  {
     //Mostramos un mensaje indicando las direccion de 
     //destino y fichero  adjunto enviado en el mensaje 
     /*$mensaje="<p>Has enviado un mensaje a:<br/>";
     $mensaje.=$valor." ";
     if ($archivador !="none") {
    $mensaje.="Con un fichero adjunto llamado ".$archivador;
     }
     $mensaje.="</p>";
         echo $mensaje;*/
      ?><script type="text/javascript">swal("Orden Creada!", "Su número de orden es <?php echo $tim; ?>, Le enviamos un correo de confirmación a <?php echo $correo ?> con los detalles de la orden!", "success");</script><?php
      
  }










      //instanciamos un objeto de la clase phpmailer al que llamamos 
      //por ejemplo mail
      $mailo = new phpmailer();

      //Definimos las propiedades y llamamos a los métodos 
      //correspondientes del objeto mail

      //Con PluginDir le indicamos a la clase phpmailer donde se 
      //encuentra la clase smtp que como he comentado al principio de 
      //este ejemplo va a estar en el subdirectorio includes
      $mailo->PluginDir = "PHPMailer/";

      $mailo->IsSMTP(); 
$mailo->SMTPAuth=true; 
$mailo->SMTPSecure="ssl"; 
$mailo->Host="topex-labs.com"; 
$mailo->Port="465"; 
$mailo->Username = "lentesdecontacto@topex-labs.com";  
$mailo->Password = "L3nt3s1820*"; 
      
      //Indicamos cual es nuestra dirección de correo y el nombre que 
      //queremos que vea el usuario que lee nuestro correo
      $mailo->From = "lentesdecontacto@topex-labs.com";

      $mailo->FromName = "Lentes de contacto nuevo pedido #$tim";

      //Asignamos asunto y cuerpo del mensaje
      //El cuerpo del mensaje lo ponemos en formato html, haciendo 
      //que se vea en negrita
      $mailo->Subject = "Nuevo pedido orden #($tim) Lentes Mark'ennovy";
      $mailo->Body = "<p>Nuevo pedido de lentes Mark'ennovy orden n&uacute;mero <b>$tim</b></p> <p>Correo del cliente: <b>$correo</b></p> <p>Cedula F&iacute;sica o Juridica: <b>$cedula</b></p>";

      //Definimos AltBody por si el destinatario del correo no admite 
      //email con formato html
      $mailo->AltBody ="Nuevo pedido de lentes Mark'ennovy orden n&uacute;mero $tim, Correo del cliente: $correo, Cedula F&iacute;sica o Juridica: $cedula";

      //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
      //una cuenta gratuita y voy a usar attachments, por tanto lo pongo a 120  
      $mailo->Timeout=120;

      //Indicamos el fichero a adjuntar si el usuario seleccionó uno en el formulario
  $mailo->AddAttachment($archivador);


      //Indicamos cuales son las direcciones de destino del correo y enviamos 
      //los mensajes

  $mailo->AddAddress('lentesdecontacto@topex-labs.com','novavisual2018@gmail.com');

  //se envia el mensaje, si no ha habido problemas la variable $success 
  //tendra el valor true
  $exitoo = $mailo->Send();

  //Si el mensaje no ha podido ser enviado se realizaran 4 intentos mas 
  //como mucho para intentar enviar el mensaje, cada intento se hara 5 s
  //segundos despues del anterior, para ello se usa la funcion sleep
  $intentoso=1; 
    while((!$exitoo)&&($intentoso<5)&&($mailo->ErrorInfo!="SMTP Error: Data not accepted")){
     sleep(5);
         //echo $mailo->ErrorInfo;
         $exitoo = $mailo->Send();
         $intentoso=$intentoso+1;       
    }

  //La clase phpmailer tiene un pequeño bug y es que cuando envia un mail con
  //attachment la variable ErrorInfo adquiere el valor Data not accepted, dicho 
  //valor no debe confundirnos ya que el mensaje ha sido enviado correctamente
  if ($mailo->ErrorInfo=="SMTP Error: Data not accepted") {
     $exitoo=true;
        }
    
  if(!$exitoo)
  {
     echo "Problemas enviando correo electrónico a ".$correo;
     echo "<br/>".$mailo->ErrorInfo; die();
  }
  else
  {

  }
