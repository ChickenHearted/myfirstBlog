<?php
$dbconnection = new PDO('mysql:host=10.20.16.102;dbname=ipadressen','DB_BLJ' ,'BLJ12345l');
$stmt = $dbconnection->query("SELECT ip, home FROM t_ipadress ORDER BY ID");
$ipArray = $stmt -> fetchAll();
?>
