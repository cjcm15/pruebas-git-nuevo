<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_xina = "localhost";
$database_xina = "xima";
$username_xina = "uv016422_root";
$password_xina = "uv016422";
$xina = mysql_pconnect($hostname_xina, $username_xina, $password_xina) or trigger_error(mysql_error(),E_USER_ERROR); 
?>