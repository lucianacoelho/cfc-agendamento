<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbarAdmin.php");
?>
<html>
<head>
<style>
body {
	background-color: white;
}
</body>
</style>
</head>
<body>

<br><div class="container">
	
  <div class="row" align="center">
    <div class="col-lg-6">
		<div class="jumbotron">
		
		<form class="form-horizontal" method= "post" action = "add.cor.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Adicionar Módulo</legend>

			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corcode">Código do Módulo</label>  
				  <div class="col-md-5">
				  <input id="corcode" name="corcode" type="text" placeholder="" class="form-control input-md" required="">	
				  </div>
				</div>
				
			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corname">Nome do Módulo</label>  
				  <div class="col-md-5">
				  <input id="corname" name="corname" type="text" placeholder="" class="form-control input-md" required="">
				  </div>
				</div>
				
				<!-- Button -->
			<div class="form-group"  align="right" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-success">Adicionar Módulo</button>
			  </div>
			</div>

			</fieldset>
			</form>
		</div>		
    </div>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbarAdmin.php");
?>