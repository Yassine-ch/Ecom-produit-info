<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root",""))
{
	die('problem de connexion  ! --> '.mysql_error());
}
if(!mysql_select_db("db"))
{
	die('probleme de selection base! --> '.mysql_error());
}

?>