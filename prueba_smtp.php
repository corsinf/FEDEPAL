
<?php
$host = 'mail.fedepal.ec'; // Cambia por tu smtp_host
$port = 465; // Cambia por tu smtp_port
$connection = @fsockopen($host, $port, $errno, $errstr, 5);
if (is_resource($connection)) {
    echo "Conexión exitosa a $host en el puerto $port";
    fclose($connection);
} else {
    echo "Error de conexión: $errstr ($errno)";
}
?>