<?php
include "conecxaobd.inc";


?>



<form method="post" action="entradabd.php" > 
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
<title>Formulário de entrada direta para o BD</title>

   


<label>Nome: </label><br/>
<input type='text' name="f_nome" size="40" maxlength="30"/><br/><br/>

<label>Usuário: </label><br/>
<input type='text' name="f_user" size="40" maxlength="30"/><br/><br/>

<label>Senha: </label><br/>
<input type='text' name="f_senha" size="40" maxlength="30"/><br/><br/>

<label>E-MAIL: </label><br/>
<input type='text' name="f_mail" size="40" maxlength="30"/><br/><br/>

<label>Telefone: </label><br/>
<input type='text' name="f_tel" size="40" maxlength="30"/><br/><br/>

<label>Observações: </label><br/>
<input type='text' name="f_obs" size="200" maxlength="30"/><br/><br/>

<input type="submit" value="Salvar">
<input type="reset" value="Limpar">


</form>


