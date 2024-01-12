<?php

/************************
 * BDD
 ***********************/

$host = "localhost";
$userDB = "root";
$passDB = "";
$Database = "getemail";
$ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);
try {
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
} catch (PDOEXeption $e) {
    echo $e;
}

/************************
 * SCRIPT
 ************************/

$information = $get;
$vServer = json_encode($_SERVER);

/************************
 * UPLOAD
 ************************/

$q = $db->prepare("INSERT INTO `load` (`info`, `content`) VALUES (:info, :content)");

$q->execute([
    'info' => $information,
    'content' => $vServer,
]);

?>