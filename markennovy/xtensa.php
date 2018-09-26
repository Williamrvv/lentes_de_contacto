<style type="text/css">
.icono {background-image: url('./iconos/xtensa_caja.png'); background-size: contain;height: 150px;background-repeat: no-repeat;}
</style>
<?php 
 ?>

<form method="post" action="#">
<div class="container-fluid" style="padding: 30px;">
	<div class="row">
		<div class="col-md-2 icono">
		</div>
		<div class="col-md-4"><br><br>
			<div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-glasses"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Nombre de la óptica">
      </div>
		</div>
		<div class="col-md-4"><br><br>
			<div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Nombre del paciente">
      </div>
		</div>
	</div><br>
	<div class="row">
		<div class="table-responsive">
		<table class="table">
		  <thead>
		    <tr>
		    	<th scope="col">Ojo</th>
		      <th scope="col">Reemplazo</th>
		      <th scope="col">Geometría</th>
		      <th scope="col">Lentes</th>
		      <th scope="col">Diametro</th>
		      <th scope="col">Radio</th>
		      <th scope="col">Esfera</th>
		      <th scope="col">&nbsp;&nbsp;Cilindro&nbsp;&nbsp;</th>
		      <th scope="col">Eje</th>
		      <th scope="col">Adición</th>
		      <th scope="col">Geom</th>
		      <th scope="col">Cantidad</th>
		      <th scope="col">Precio</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">Derecho</th>
		      <td>
		      	<select id="" class="form-control">
							<option value="mensual">Mensual</option>
						</select>
		      </td>
		      <td>
		      	<select id="geomed" class="form-control" onchange="calcularpreciod()">
							<option value=""></option>
							<option value="">Esférica</option>
							<option value="">Tórica</option>
							<option value="">Multifocal esférico</option>
						</select>
		      </td>
		      <td>
		      	<select id="" class="form-control">
							<option value="">Xtensa</option>
						</select>
		      </td>
		      <td>
		      	<select id="diametrod" class="form-control">
		      		<option></option>
							<option value="">14.40</option>
							<option value="">14.30</option>
						</select>
		      </td>
		      <td>
		      	<select id="radiod" class="form-control">
		      		<option></option>
							<option value="">8.70</option>
							<option value="">8.60</option>
						</select>
		      </td>
		      <td>
		      	<input id="esferader" class="form-control" type="number" placeholder="-10,+10" min="-10" max="10" step="0.25" >
		      </td>
		      <td>
		      	<input id="cilindroder" class="form-control" type="number" placeholder="-5.75,-0.50" min="-5.75" max="-0.75" step="0.50">
		      </td>
		      <td>
		      	<input id="ejeder" class="form-control" type="number" placeholder="todos" step="5">
		      </td>
		      <td>
		      	<select id="adicionder" id="adicionder" class="form-control" onchange="adicionderecha()">
		      		<option></option>
							<option value="1.25">1.25</option>
							<option value="1.50">1.50</option>
							<option value="2.25">2.25</option>
							<option value="2.50">2.50</option>
						</select>
		      </td>
		      <td>
		      	<select id="geometriader" class="form-control" onchange="geometd(this.selectedIndex)">
		      		<option></option>
							<option value="">CD</option>
							<option value="">CN</option>
						</select>
		      </td>
		      <td>
		      	<input class="form-control" type="number" placeholder="cantidad" min="1" step="1" value="1" id="cantidadd" onchange="calcularpreciod()">
		      </td>
		      <td><input id="totald" class="form-control" type="number" placeholder="Precio: $ "  value="0" readonly></td>
		    </tr>

<!----------------------------------------------------------------------------izquierdo--------------------------------------------------------------------------------------------------------------->

		    <tr>
		      <th scope="row">Izquierdo</th>
		      <td>
		      	<select id="" class="form-control">
							<option value="mensual">Mensual</option>
						</select>
		      </td>
		      <td>
		      	<select id="geomeiz" class="form-control" onchange="calcularprecioiz()">
							<option></option>
							<option value="esferica">Esférica</option>
							<option value="torica">Tórica</option>
							<option value="miltifocal">Multifocal esférico</option>
						</select>
		      </td>
		      <td>
		      	<select id="" class="form-control">
							<option value="">Xtensa</option>
						</select>
		      </td>
		      <td>
		      	<select id="diametroi" class="form-control">
		      		<option></option>
							<option value="">14.40</option>
							<option value="">14.30</option>
						</select>
		      </td>
		      <td>
		      	<select id="radioi" class="form-control">
		      		<option></option>
							<option value="">8.70</option>
							<option value="">8.60</option>
						</select>
		      </td>
		      <td>
		      	<input id="esferaizq" class="form-control" type="number" placeholder="-10,+10" min="-10" max="10" step="0.25" >
		      </td>
		      <td>
		      	<input id="cilindroizq" class="form-control" type="number" placeholder="-5.75,-0.50" min="-5.75" max="-0.75" step="0.50">
		      </td>
		      <td>
		      	<input id="ejeizq" class="form-control" type="number" placeholder="todos" step="5">
		      </td>
		      <td>
						<select id="adicionizq" id="adicionder" class="form-control" onchange="adicionizquierda()">
		      		<option></option>
							<option value="1.25">1.25</option>
							<option value="1.50">1.50</option>
							<option value="2.25">2.25</option>
							<option value="2.50">2.50</option>
						</select>
		      </td>
		      <td>
		      	<select id="geometriaizq" class="form-control" onchange="geometi(this.selectedIndex)">
		      		<option></option>
							<option value="">CD</option>
							<option value="">CN</option>
						</select>
		      </td>
		      <td>
		      	<input class="form-control" type="number" placeholder="cantidad" min="1" step="1" value="1" id="cantidadiz" onchange="calcularprecioiz()">
		      </td>
		      <td><input id="totaliz" class="form-control" type="text" placeholder="Precio: $ " value="0" readonly></td>		      
		    </tr>
		    <tr>
		    	<td colspan="12"></td>
		    	<td><input id="total" class="form-control" type="text" placeholder="Total: $ " value="0" readonly></td>
		    </tr>
		  </tbody>
		</table>
		</div>
	</div>
	<button class="btn btn-primary">Encargar</button>
</div>
</form>

<script type="text/javascript">

	function geometd(indice){
		if (indice==1) {
			document.getElementById("geometriaizq").selectedIndex="2";
		}
		if (indice==2) {
			document.getElementById("geometriaizq").selectedIndex="1";
		}
	}
	function geometi(indice){
		if (indice==1) {
			document.getElementById("geometriader").selectedIndex="2";
		}
		if (indice==2) {
			document.getElementById("geometriader").selectedIndex="1";
		}
	}

	function calcularpreciod(){
		var indid= $("#geomed option:selected").index();
		if (indid==0) {
			var preciode='0';
		}
		if (indid==1) {
			var preciode='15.70';
			esfericaderecho();
		}
		if (indid==2) {
			var preciode='24.15';
			toricoderecho();
		}
		if (indid==3) {
			var preciode='24.15';
			multifocalderecho();
		}

		var txtcantidadd= document.getElementById('cantidadd').value;
		document.getElementById("totald").value = (preciode*txtcantidadd).toFixed(2);
		total();
	}
function calcularprecioiz(){
	var indid= $("#geomeiz option:selected").index();
		if (indid==0) {
			var precioiz='0';
		}
		if (indid==1) {
		var precioiz='15.70';
		esfericaizquierdo()
	}
	if (indid==2) {
		var precioiz='24.15';
		toricoizquierdo();
	}
	if (indid==3) {
		var precioiz='24.15';
		multifocalizqierdo();
	}

	var txtcantidadiz= document.getElementById('cantidadiz').value;
  document.getElementById("totaliz").value = (precioiz*txtcantidadiz).toFixed(2);
  total();
}

function total(){
	var t1 = document.getElementById('totaliz').value;
	var t2 = document.getElementById('totald').value;
	var t12= parseFloat(t1)+parseFloat(t2);
  document.getElementById("total").value = String('Total $')+ t12.toFixed(2);
}

function esfericaderecho(){
	$( "#ejeder" ).prop( "disabled", true );
	$( "#adicionder" ).prop( "disabled", true );
	$( "#cilindroder" ).prop( "disabled", true );
	$("#ejeder").val("");
	$("#adicionder").val("");
	$("#cilindroder").val("");
	$( "#geometriader" ).prop( "disabled", false );
	$("#geometriaizq").attr("onchange","geometi(this.selectedIndex)");
//diametro y radio
	document.getElementById("diametrod").selectedIndex="1";
	$( "#diametrod" ).prop( "disabled", true );
	document.getElementById("radiod").selectedIndex="1";
	$( "#radiod" ).prop( "disabled", true );
}
function toricoderecho(){
	$( "#adicionder" ).prop( "disabled", true );
	$( "#geometriader" ).prop( "disabled", true );
	$("#adicionder").val("");
	$("#geometriader").val("");
	$( "#cilindroder" ).prop( "disabled", false );
	$( "#ejeder" ).prop( "disabled", false );
	$("#geometriaizq").attr("onchange","");
//diametro y radio
	document.getElementById("diametrod").selectedIndex="1";
	$( "#diametrod" ).prop( "disabled", true );
	document.getElementById("radiod").selectedIndex="1";
	$( "#radiod" ).prop( "disabled", true );
}
function multifocalderecho(){
	$( "#ejeder" ).prop( "disabled", true );
	$( "#cilindroder" ).prop( "disabled", true );
	$("#ejeder").val("");
	$("#cilindroder").val("");
	$( "#geometriader" ).prop( "disabled", false );
	$( "#adicionder" ).prop( "disabled", false );
	$("#geometriaizq").attr("onchange","geometi(this.selectedIndex)");
//diametro y radio
	document.getElementById("diametrod").selectedIndex="2";
	$( "#diametrod" ).prop( "disabled", true );
	document.getElementById("radiod").selectedIndex="2";
	$( "#radiod" ).prop( "disabled", true );
	adicionizquierda();
}
//funciones geometría***********
function esfericaizquierdo(){
	$( "#ejeizq" ).prop( "disabled", true );
	$( "#adicionizq" ).prop( "disabled", true );
	$( "#cilindroizq" ).prop( "disabled", true );
	$("#ejeizq").val("");
	$("#adicionizq").val("");
	$("#cilindroizq").val("");
	$( "#geometriaizq" ).prop( "disabled", false );
	$("#geometriader").attr("onchange","geometd(this.selectedIndex)");
//diametro y radio
	document.getElementById("diametroi").selectedIndex="1";
	$( "#diametroi" ).prop( "disabled", true );
	document.getElementById("radioi").selectedIndex="1";
	$( "#radioi" ).prop( "disabled", true );
}
function toricoizquierdo(){
	$( "#adicionizq" ).prop( "disabled", true );
	$( "#geometriaizq" ).prop( "disabled", true );
	$("#adicionizq").val("");
	$("#geometriaizq").val("");
	$( "#cilindroizq" ).prop( "disabled", false );
	$( "#ejeizq" ).prop( "disabled", false );
	$("#geometriader").attr("onchange","");
//diametro y radio
	document.getElementById("diametroi").selectedIndex="1";
	$( "#diametroi" ).prop( "disabled", true );
	document.getElementById("radioi").selectedIndex="1";
	$( "#radioi" ).prop( "disabled", true );
}
function multifocalizqierdo(){
	$( "#ejeizq" ).prop( "disabled", true );
	$( "#cilindroizq" ).prop( "disabled", true );
	$("#ejeizq").val("");
	$("#cilindroizq").val("");
	$( "#geometriaizq" ).prop( "disabled", false );
	$( "#adicionizq" ).prop( "disabled", false );
	$("#geometriader").attr("onchange","geometd(this.selectedIndex)");
//diametro y radio
	document.getElementById("diametroi").selectedIndex="2";
	$( "#diametroi" ).prop( "disabled", true );
	document.getElementById("radioi").selectedIndex="2";
	$( "#radioi" ).prop( "disabled", true );
	adicionderecha();
}
function adicionderecha(){
	var adicion = $("#adicionder option:selected").index();
	if (adicion==1) {
	document.getElementById("geometriader").selectedIndex="2";
	}
}

function adicionderecha(){
	var adicion = $("#adicionder option:selected").index();
	var geomeiz = $("#geomeiz option:selected").index();
if (geomeiz==3 && adicion==1) {
	document.getElementById("adicionizq").selectedIndex="2";
	document.getElementById("geometriaizq").selectedIndex="1";
	document.getElementById("geometriader").selectedIndex="2";
}
if (geomeiz==3 && adicion==2) {
	document.getElementById("adicionizq").selectedIndex="1";
	document.getElementById("geometriaizq").selectedIndex="2";
	document.getElementById("geometriader").selectedIndex="1";
}
if (geomeiz==3 && adicion==3) {
	document.getElementById("adicionizq").selectedIndex="4";
	document.getElementById("geometriaizq").selectedIndex="1";
	document.getElementById("geometriader").selectedIndex="2";
}
if (geomeiz==3 && adicion==4) {
	document.getElementById("adicionizq").selectedIndex="3";
	document.getElementById("geometriaizq").selectedIndex="2";
	document.getElementById("geometriader").selectedIndex="1";
}
}
function adicionizquierda(){
	var adicion = $("#adicionizq option:selected").index();
	var geomed = $("#geomed option:selected").index();
if (adicion==1 && geomed==3) {
	document.getElementById("adicionder").selectedIndex="2";
	document.getElementById("geometriaizq").selectedIndex="2";
	document.getElementById("geometriader").selectedIndex="1";
}
if (adicion==2 && geomed==3) {
	document.getElementById("adicionder").selectedIndex="1";
	document.getElementById("geometriaizq").selectedIndex="1";
	document.getElementById("geometriader").selectedIndex="2";
}
if (adicion==3 && geomed==3) {
	document.getElementById("adicionder").selectedIndex="4";
	document.getElementById("geometriaizq").selectedIndex="2";
	document.getElementById("geometriader").selectedIndex="1";
}
if (adicion==4 && geomed==3) {
	document.getElementById("adicionder").selectedIndex="3";
	document.getElementById("geometriaizq").selectedIndex="1";
	document.getElementById("geometriader").selectedIndex="2";
}
}

</script>