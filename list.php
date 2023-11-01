<?php
session_start();
include_once('inc/config.php');

echo(urlencode("ROOT/20230823zsMINI/c1"));
echo("<br>");

if ($_SESSION == null) {
    $_SESSION["path"] = $__mainProjectPath__;
}

$path = $_SESSION["path"];
$files = scandir($path);

foreach ($files as $key => $value) {
    if ($value != "." && $value != ".." && $value != "desktop.ini") {
        echo ($value);
        echo ('<button onclick="window.open(\'linkwindow.php?cmd=' . urlencode('start "" "' . $_SESSION["path"] . "/" . $value . '"') . '\' )">打开</button>');
        echo "<br>";
    }
}
$sql = "SELECT * FROM `xideal_companys` WHERE 1;";
var_dump($sql);
$result = $conn->query($sql);
$row = $result->fetch_all();
foreach ($row as $key => $value) {
    if ($value[0] == "1") {
        continue;
    }
    var_dump($value[2]);
    $echofor = ' <option value="' . $value[0] . '">' . $value[2] . '</option> ';
    echo ($echofor);
}

#<a href="linkwindow.php"  target="_blank">Link</a>
#<button onclick="window.open('linkwindow.php')">打开</button>
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        div {
            width: auto;
            height: 100%;
            border: 1px dashed black;
            overflow: hidden;
        }
    </style>
</head>
<body>
<h1>将图片拖拽到此</h1>
<div id="fileZone" ondrop="drop(event)">
			<span>
				<img/>
			</span>
</div>
</body>
</html>
<script>
    var ipt = document.getElementById("fileZone");
    ipt.ondragover = function () {
        return false; //当元素移动至此  关闭默认处理
    }
 
    //添加拖拽事件
    function drop(e) {
        e.stopPropagation();
        e.preventDefault();
        e == e || window.event;//判断是浏览器图片还是电脑图片
        var files = e.dataTransfer.files;//获取拖拽的所有的文件
        for (var i = 0; i < files.length; i++) {
            var file = files[i];//获取每个文件
            console.log(file);
            if (file.type.indexOf("image") != -1) {//判断是否是图片
                var reader = new FileReader();//创建文件读取对象
                //读完回调事件
                reader.onload = function (f) {
                    var sp = document.createElement("span");
                    sp.innerHTML += '<img style="padding: 0px 10px;" width="200px"  src="' + this.result + '" alt="' + f.name + '"/>';
                    ipt.insertBefore(sp, null);//ipt内部追加sp
                }
 
                reader.readAsDataURL(file);//把图片读成Base64编码字符串
            }
        }
    }

    var js=document.scripts;

    var jsPath;

    for(var i=js.length;i--){

        if(js[i-1].src.indexOf("test.js")-1){

            jsPath=js[i-1].src.substring(0,js[i-1].src.lastIndexOf("/")+1);

        }

    }

    alert(jsPath);
</script>