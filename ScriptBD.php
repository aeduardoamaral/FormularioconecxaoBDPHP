<?php

include "conecxaobd.inc";

$res=mysqli_query ($con,"SELECT * FROM tb_cadastro");

$linhas = mysqli_num_rows($res);


echo $linhas;


mysqli_close($con);


?>