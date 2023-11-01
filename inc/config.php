<?php 

$apirootkey = "c9utyqaw379r7hcqw36";

//socket
$socket_host = "127.0.0.1";
$socket_port = 48200;

$getpath = "../../../VCG41N847371880.jpg";

$__mainProjectPath__ = "D:/Project";

$appdataPath = "C:\Users\Administrator\AppData";

//app paths
include_once("paths-inc.php");

$servername = "localhost";
$username = "xideal";
$password = "jwI0_X1]qKkQGt6V";
$dbname = "xidealprojectcontroller";

//MYsql
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

?>