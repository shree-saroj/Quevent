<?php

$serverName = "SHREEPC";
$connectionOptions = [
    "Database" => "AutoTrustDB",
    "Uid" => "sa",
    "PWD" => "Mssql@Shr33"
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

?>