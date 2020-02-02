<?php

$con = mysqli_connect('localhost', 'aeduardoamaral', 'aean1968');

mysqli_select_db($con,"canalfb");

if (!$con) {
    die('Não foi possível conectar: ' . mysqli_error());
}
echo 'Conexão bem sucedida';


echo "<br/><br/><hr/><br/><br/>";






?>