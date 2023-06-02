<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lista de cargamento</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		
		<!-- Page content -->
		<section class="active" class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="btn-exit-system">
					<i class="fas fa-power-off"></i>
				</a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; CARGAMENTOS
				</h3>
				<p class="text-justify">
				</p>
			</div>

			<div class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="home.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD </a>	
			</div>

			

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="cargamento-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; REGISTRAR CARGAMENTO</a>
					</li>
					<li>
						<a class="active" href="cargamento-list.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CARGAMENTOS</a>
					</li>
					<li>
						<a href="cargamento-search.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CARGAMENTO</a>
					</li>
				</ul>	
			</div>
			
			<div class="container-fluid">
				<form class="form-neon">
					<table>
						<tr>
						<th style="padding-right: 30px;">CARGAMENTO</th>
                		<th style="padding-right: 30px;">No. DPI</th>
                		<th style="padding-right: 30px;">AGRICULTOR</th>
                		<th style="padding-right: 30px;">TIPO CAFE</th>
                		<th style="padding-right: 30px;">PARCIALIDADES</th>
                		<th style="padding-right: 30px;">PESO TOTAL</th>
                		<th style="padding-right: 30px;">LICENCIA</th>
                		<th style="padding-right: 30px;">PILOTO</th>
                		<th style="padding-right: 30px;">NO. PLACA</th>
                		<th style="padding-right: 30px;">VEHICULO</th>
                		<th>ESTADO</th>
						<!--<th>ESTADO CUENTA</th>
                		<th>MENSAJE</th>-->
						</tr>
				<?php
				$url = 'http://localhost:8012/appwebservice/registro_cargamento.php';
				$cargamentos = json_decode(file_get_contents($url));
				foreach ($cargamentos as $cargamento) {	
					echo '<tr>';
					echo '<td style="padding-right: 30px;">'.$cargamento->id_cargamento.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->agricultor_dpi.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->nombre.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->tipo_cafe.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->cant_parcialidad.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->peso_total.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->licencia_piloto.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->piloto_nombre.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->vehiculo_placa.'</td>';
					echo '<td style="padding-right: 30px;">'.$cargamento->tipo_vehiculo.'</td>';
					echo '<td>'.$cargamento->estado_cargamento.'</td>';
					//echo '<td style="padding-right: 30px;">'.$cargamento->estado_cuenta.'</td>';
					//echo '<td style="padding-right: 30px;">'.$cargamento->mensaje.'</td>';
					echo '</tr>';
				}
				?>
					</table>
				</form>
			</div>

		</section>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>