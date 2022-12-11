<?php         

$connect = new mysqli("MariaDB", "root", "zsxdcf123F");

if($connect->connect_error) echo "error";
else echo "up";