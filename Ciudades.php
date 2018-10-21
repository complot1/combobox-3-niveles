<?php
include "Conexion.php";
$db=connect();
$query=$db->query("select * from ubdistrito where idProv=$_GET[idProv]");
$states = array();
while($r=$query->fetch_object()){ $states[]=$r; }
if(count($states)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($states as $s) {
	print "<option value='$s->idDist'>$s->distrito</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>