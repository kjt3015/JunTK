<?php
$servername = "conank.iptime.org";
$username = "cmsAdmin";
$password = "simulab_vc";
$database = "cmsDB";
$port = 53306;

$conn = new mysqli($servername, $username, $password, $database, $port);
mysqli_set_charset($conn, "utf8");

// 접속 오류 확인
if($conn->connect_error){
    die("MySQL 서버 접속 오류: " . $conn->connect_error);
}
?>