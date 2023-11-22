<?php
include("conexion.php");
$bloq = $_POST["txtbloque"];
$ofi = $_POST["txtoficina"];
$seri = $_POST["txtserial"];
$ingr = $_POST["txtingreso"];
$mod = $_POST["txtmodelo"];
$garan = $_POST["txtgarantia"];
$marc = $_POST["txtmarca"];

if($_server['REQUEST_METHOD']) == "POST" and insset ($_POST['grabardatos'])
  {
   $sqlgrabar = "INSERT INTO dispositivos(bloque, oficina, serial, ingreso, modelo, garantia, marca) values('$bloq', '$ofi','$seri','$ingr','$mod','$garan','$marc')";
 if(mysqli_query($conn,$sqlgrabar) )
 {
    header("Location: principal.php");
 }else
 {
    echo"ERROR:" .$sql. "<br>".mysql_error($conn);
 }

  }





  if($_server['REQUEST_METHOD']) == "POST" and insset ($_POST['modificardatos'])
  {
    $sqlmodificar = "UPDATE dispositivos SET bloque='$bloq', oficina='$ofi', ingreso='$ingr', modelo='$mod', garantia='$garan', marca'$marc' WHERE serial=$seri";
    if(mysqli_query($conn,$sqlgrabar) )
   {
    header("Location: principal.php");
   }else
   {
     echo"ERROR:" .$sql. "<br>".mysql_error($conn);
   }
  }

    


   
  if($_server['REQUEST_METHOD']) == "POST" and insset ($_POST['eliminardatos'])
  
  {
    $sqleliminar = " DELETE FROM dispositivos WHERE serial=$seri";
if (mysqli_query($conn,$sqleliminar)){
    header("Location: principal.php");

}else{
    echo"error:" .sql."<br>".mysql_error($conn);
}
    

    
  }



  if($_server['REQUEST_METHOD']) == "POST" and insset ($_POST['limpiardatos'])
  {
    header("Location: principal.php");

    
  }
?>

