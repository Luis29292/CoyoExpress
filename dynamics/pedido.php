<?php
$nC=318012345; //Sustituir por la sesión!!!!!!
$prod = $_POST['prod'];
$direc = $_POST['direccion'];
$conexion = mysqli_connect("localhost", "root", "", "CoyoExpress");
if( !$conexion ){//Checa que la conexión sea exitosa
  echo mysqli_conect_error();
  echo mysqli_conect_errno();
  exit();
}
$pedid = "INSERT INTO pedido(id_usuario,id_Producto,id_Direccion) VALUES ($nC,$prod,$direc)";
mysqli_query($conexion, $pedid);
echo "Se realizó el pedido con éxito";
echo "<a href=''>Regresar</a>"; //Que regrese a Inicio !!!!!!!!!!
setcookie("PedidoTiempo",$nC,time()+300);
?>
