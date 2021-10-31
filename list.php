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
            <div align="center">
            <legend>Lista de matérias</legend></fieldset>
			<?php
				include_once("faclist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Lista de módulos</legend></fieldset>
			<?php 
              include_once("corlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Lista de modalidades</legend></fieldset>
			<?php 
			  include_once("sublist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Lista de datas</legend></fieldset>
			<?php
				 include_once("roomlist.php");
			?>
			<br>
			<br>
			<br>
			<br>
			<div align="center">
			<legend>Lista de horários</legend></fieldset>
			<?php
				 include_once("timelist.php");
			?>
			

<?php
   include_once("footer.php");
   include_once("navbarAdmin.php");
?>
