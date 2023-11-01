
<?php 
include_once('inc/config.php');

// 创建套接字
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// 连接服务端
socket_connect($socket, '127.0.0.1', 48200);

$file = fopen("batgo.bat", "w");

$txt = 'start "" "D:\Project\20230823zsMINI"';

fwrite($file, $txt);
fclose($file);

#socket_write($socket, "0batgo.bat");
socket_write( $socket, $_GET["cmd"] );
$msg = socket_read($socket, 10240);
echo($_GET["cmd"]);
?>

<script type="text/javascript">
    window.close();
</script>  
Linkw 加载中 / —— \ / —— \ / ——
