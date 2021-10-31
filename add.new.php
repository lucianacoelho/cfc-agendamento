<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
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
	
  <div class="row">
    <div class="col-lg-6">
		<div class="jumbotron">
		<form class="form-horizontal" method= "post" action = "new.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Adicionar informações</legend>

			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corcode">Código do módulo</label>  
				  <div class="col-md-5">
				  <input id="corcode" name="corcode" type="text" placeholder="" class="form-control input-md" required="">	
				  </div>
				</div>
				
			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corname">Nome do módulo</label>  
				  <div class="col-md-5">
				  <input id="corname" name="corname" type="text" placeholder="" class="form-control input-md" required="">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="falname">Nome da matéria</label>  
				  <div class="col-md-5">
				  <input id="falname" name="falname" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Designation">Designação</label>  
				  <div class="col-md-5">
				  <input id="Designation" name="Designation" type="text" placeholder="" class="form-control input-md" required="">
				  <span class="help-block"></span>  
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="room">Data</label>  
				  <div class="col-md-5">
				  <input id="room" name="room" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="subcode">Código da modalidade</label>  
				  <div class="col-md-5">
				  <input id="subcode" name="subcode" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="subdescription">Descrição da modalidade</label>  
				  <div class="col-md-5">
				  <input id="subdescription" name="subdescription" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="starttime">Horário de início</label>  
				  <div class="col-md-5">
				  <input id="starttime" name="starttime" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="endtime">Horário de término</label>  
				  <div class="col-md-5">
				  <input id="endtime" name="endtime" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>
				
				<!-- Button -->
			<div class="form-group"  align="right" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-success">Adicionar módulo</button>
			  </div>
			</div>

			</fieldset>
			</form>
		</div>		
    </div>

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>
