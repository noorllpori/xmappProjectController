创建车辆信息 校对文件

车名字 项目号 电车/摩托 国标
油泥 点云 模型 数据
blender模型总数
工业模型总
其他模型备注
图片
ppt
关联的
<?php

session_start();
include_once('inc/config.php');

$date = date('Ymd');
echo ($date);

$sql = "SELECT * FROM `xideal_bcycinfo` WHERE `uid` LIKE '" . $date . "%';";
var_dump($sql);
$result = $conn->query($sql);
$row = $result->fetch_all();
$num = count($row) + 1;
if ($num < 10) {
    $nums = "0" . $num;
} else {
    $nums = "" . $num;
}
echo ($nums);

?>