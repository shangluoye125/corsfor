<?php
header("Access-Control-Allow-Origin:http://10.30.29.76:63341");
header("Access-Control-Allow-Credentials:true");
header("Content-Type:text/java");

$userName=array('userName'=>123456);
echo json_encode($userName);
?>