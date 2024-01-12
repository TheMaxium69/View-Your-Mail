<?php

if (!empty($_GET['i'])){
    $get = $_GET['i'];
} else {
    $get = "none";
}
require "script.php";

header('Content-Type: image/png');
readfile('pixel.png');
?>