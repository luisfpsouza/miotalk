<?php
$host = "smtp.titan.email";
$ports = [25, 465, 587, 2525];

foreach ($ports as $port) {
    $connection = @fsockopen($host, $port, $errno, $errstr, 5);
    if (is_resource($connection)) {
        echo "Porta $port está ABERTA<br>";
        fclose($connection);
    } else {
        echo "Porta $port está FECHADA ($errstr)<br>";
    }
}
?>
