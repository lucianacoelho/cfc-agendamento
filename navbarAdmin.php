<?php 
 include_once("header.php");
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><!--BUPC --> Sistema de Agendamento </a>
    </div>
    <div>
	
	
    <ul class="nav navbar-nav">
        <li><a href="homeAdmin.php"><span class="glyphicon glyphicon-home"></span> Início </a></li>
        <li><a href="addsubject.php"><span class="glyphicon glyphicon-plus-sign"></span> Modalidade</a></li>
        <li><a href="addfaculty.php"><span class="glyphicon glyphicon-plus-sign"></span> Matéria</a></li> 
        <li><a href="addcourse.php"><span class="glyphicon glyphicon-plus-sign"></span> Módulo</a></li>
		<li><a href="addroomTime.php"><span class="glyphicon glyphicon-asterisk"></span> Dia </a></li>
		<li><a href="addtime.php"><span class="glyphicon glyphicon-time"></span> Horário</a></li>
        <!-- <li><a href="list.php"><span class="glyphicon glyphicon-list"></span> Hora de Término</a></li> -->
        <li><a href="register.php"><span class="glyphicon glyphicon-calendar"></span> Registrar Aluno </a></li>
		
    	</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
    </ul></div>
  </div>
</nav>

</body>
</html>





