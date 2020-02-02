<?php

include "conecxaobd.inc";

$vnome=$_POST["f_nome"];
$vuser=$_POST["f_user"];
$vsenha=$_POST["f_senha"];
$vmail=$_POST["f_mail"];
$vtel=$_POST["f_tel"];
$vobs=$_POST["f_obs"];

$sql="INSERT INTO tb_cadastro VALUES (NULL, '$vnome', '$vuser', '$vsenha', '$vmail', '$vtel', '$vobs')";



$res=mysqli_query ($con,$sql);


mysqli_close($con);
echo "Entrada de dados ok";



echo "<script>window.location='form.php';
//alert('$vnome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";


?>