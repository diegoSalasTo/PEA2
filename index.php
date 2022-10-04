<?php 
require "data/database.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel='stylesheet' type='text/css' href='estilos/botones.css'>
	<link rel='stylesheet' type='text/css' href='estilos/estilos.css'>
	<title>parcial</title>

</head>
<body>
	<div class="wrapLogin">
<div class="container">
	<h1>Consulta de Clientes</h1>

	  <div class="mb-3">
        <hr>
        <br>            
        <button class='button button-glow button-rounded  button-caution diego'id="boton"> consultar </button>

 		<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo Cliente</th>
                    <th>Tipo Doc.</th>
                    <th>N° Documento</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody id="tablaBody">
                
            </tbody>
        </table>
       
        
</div>
</div>

 <!-- Sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Listado de clientes -->
<script type="text/javascript" src="js/clientes.js"></script>
</body>
</html>