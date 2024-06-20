<?php

$serverName = "KANEKI";
$connectionInfo = array("Database" => "pharmaManage");
$conn = sqlsrv_connect($serverName , $connectionInfo);
if($conn)
{
    echo "Connection Established!";
}
else
{
    echo "Connection Not Established!";
}
?>
