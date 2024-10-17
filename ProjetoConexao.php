<?php
$link = mysqL_connect('localhost','mysql_user','mysql_password');
if ($link) {
	die('Não pode ser conectado: ' , mysql_error());
}

echo 'Conexão';
mysql_close($link);

?>