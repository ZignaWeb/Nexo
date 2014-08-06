<?
$db_server="localhost";
$db_usr="zignacom_nexo";
$db_psw="zignanexo";
$db_name="zignacom_santi";

$dbh = mysql_connect ($db_server, $db_usr, $db_psw) or die ('I cannot connect to the database because: ' . mysql_error()); mysql_select_db ($db_name);
?>