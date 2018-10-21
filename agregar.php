<?php

include "Conexion.php";

if(isset($_GET["opt"]) && $_GET["opt"]=="country"){
	$con = connect();
	$con->query("insert into ubdepartamento(departamento) value (\"$_POST[departamento]\")");
	setcookie("countryadd",1);
	header("Location: Nuevo.php");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="state"){
	$con = connect();
	$con->query("insert into ubprovincia(provincia,idDepa) value (\"$_POST[provincia]\",$_POST[iDepa])");
	setcookie("stateadd",1);
	header("Location: Nuevo.php");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="city"){
	$con = connect();
	$con->query("insert into ubdistrito(distrito,idProv) value (\"$_POST[distrito]\",$_POST[idProv])");
	setcookie("cityadd",1);
	header("Location: Nuevo.php");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="all"){
	$con = connect();
	$con->query("insert into combo(idDepa,idProv,idDist) value ($_POST[idDepa],$_POST[idProv],$_POST[idDist])");
	setcookie("comboadd",1);
	header("Location: index.php");
}
?>