<?php
      $function= conectarse();
{
     $conexion=new MySQLi("localhost","angie","angie3005","empresa_adsi");

     if ($conexion->connect_errno)
         echo "problemas en la conexion". $conexion->connect_error;
     else 
	     return $conexion;
}

?>