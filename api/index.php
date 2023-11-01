<?php
include_once('../inc/config.php');

if( $_GET == null ){
    drop_error("no input");
}

if( $_GET["key"] == null ){
    drop_error("no key input");
}

if( $_GET["key"] != $apirootkey ){
    drop_error("key error");
}

if ($_GET != null && $_GET['mod'] == "files" &&  $_GET['motion'] == "r" ) {
//

$rootpath = $__mainProjectPath__;
$userpath = $appdataPath;
$fullpath = null;

$path = $_GET["path"];
if( $path == "undefined" || $path == null || $path == "null" || $path == "root"|| $path == "ROOT"|| $path == urlencode("root/") || $path == urlencode("ROOT/") ){
    $fullpath = $rootpath;
}else{
    $fullpath = $rootpath."/" . substr(urldecode($path), 5) ;
}
//完整路径确定 $fullpath
$returnA = array();
//echo( urlencode("ROOT/2023090601AK") );
//https://pythonjishu.com/znjvosawckapsoo/
$dir = $fullpath; 

$file_list = scandir($dir);

unset($file_list[0]);
unset($file_list[1]);
$file_list = array_values($file_list);

$filesArray = array();

//判断序列
$files_squ = $file_list;
foreach ($files_squ as $key => $value) {
    $file_path = $fullpath."/".$value;
    $file_type = mime_content_type($file_path);
    if( substr( $file_type,0,5 ) != "image" ){
        unset($files_squ[$key]);
    }
    $value_wt =  preg_replace("/\d\d\d\d/","X%squ%X", $value);
    if( !strrpos( $value_wt, "%squ%X") ){
        unset($files_squ[$key]);
    }
}
$squ_full_list = array();
$squ_full_list_id = array();
$squ_leaft = array();

while(true){
    $value_wt = '';
    $squorigin = '';
    $squname = array();
    $squfirstID = 0;
    $squlist = array();
    foreach ($files_squ as $key => $value) {
        $squorigin = $value;
        $value_wt =  preg_replace("/\d\d\d\d/","X%squ%X", $value);
        $squname = explode("X%squ%X",$value_wt);
        array_push($squlist,$value);
        $squfirstID = $key;
        $squ_full_list_id[$key] = -1;
        unset($files_squ[$key]);
        break;
    }
    foreach ($files_squ as $key => $value) {
        if( $value_wt ==  preg_replace("/\d\d\d\d/","X%squ%X", $value) ){
            array_push($squlist,$value);
            $squ_full_list_id[$key] = -1;
            unset($files_squ[$key]);
        }
    }
    if( count($squlist) == 1 ){
        $squ_leaft[$squfirstID] = $squorigin;
        unset($squ_full_list_id[$squfirstID]);
    }elseif(count($squlist) > 1  ){
        $squ_full_list[ count($squ_full_list) ] = $squlist;
    }
    if( count($files_squ) == 0 ){
        break;
    }
}
//处理原始数据
foreach ($file_list as $key => $value) {
    if( isset($squ_full_list_id[$key]) ){
        unset($file_list[$key]);
    }
}


/*
$files_squN = array();
$files_squN_list = array();

foreach($files_squ as $file) {
    $file_path = $fullpath."/".$file;
    $file_type = mime_content_type($file_path);
    if( substr( $file_type,0,5 ) == "image" ){
        array_push($files_squN, $file);
    }
}

$files_squN_list_cache4 = array();
$files_squN_list_cache5 = array();
$files_squN_list_cache6 = array();
for ($i=0; $i < count($files_squN); $i++) { 
    //和其余文件比较
    array_push($files_squN_list_cache4, preg_replace("/\d\d\d\d/","X%squ%X", $files_squN[$i]));
    array_push($files_squN_list_cache5, preg_replace("/\d\d\d\d\d/","X%squ%X", $files_squN[$i]));
    array_push($files_squN_list_cache6, preg_replace("/\d\d\d\d\d\d/","X%squ%X", $files_squN[$i]));
}
$files_squN_list["4"] = $files_squN_list_cache4;
$files_squN_list["5"] = $files_squN_list_cache5;
$files_squN_list["6"] = $files_squN_list_cache6;

for ($a=4; $a < count($files_squN_list)+4; $a++) { 

    $files_squN_list_in = $files_squN_list[$a];
    for ($i=0; $i < count($files_squN_list_in); $i++) { 
        if( strrpos( $files_squN_list_in[$i], "X%squ%X") ){
            echo "y";
        }
    }
}
 */

foreach($file_list as $file) {
    $fileallinfo = array();

    $file_path = $fullpath."/".$file;
    $file_type = mime_content_type($file_path);
    $file_info = pathinfo($file_path);

    //文件尺寸
    $file_size_org = filesize($file_path);
    if( $file_size_org/1024 < 1 ){
        $file_size = (intval(($file_size_org)*100)/100) ." Bt";
    }elseif ($file_size_org/1024/1024 < 1 ) {
        $file_size = (intval(($file_size_org/1024)*100)/100) ." KB";
    }elseif ($file_size_org/1024/1024/1024 < 1 ) {
        $file_size = (intval(($file_size_org/1024/1024)*100)/100) ." MB";
    }elseif ($file_size_org/1024/1024/1024/1024 < 1 ) {
        $file_size = (intval(($file_size_org/1024/1024/1024)*100)/100) ." GB";
    }

    //文件名样式 url_basename
    //<button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
    $url_basename = $file_info["basename"];
    

    $file_modify_time = filemtime($file_path);
    
    $fileallinfo["null"] = "";
    $fileallinfo["file_id"] = "暂无";
    $fileallinfo["cando"] = "文件夹";

    $fileallinfo["file_type"] = $file_type;

    $file_modify_time = date('Y-m-d H:i:s', $file_modify_time);
    $fileallinfo["file_modify_time"] = $file_modify_time;

    $fileallinfo["dirname"] = $file_info["dirname"];
    $fileallinfo["basename"] = $file_info["basename"];
    $fileallinfo["extension"] = "directory";
    $fileallinfo["filename"] = $file_info["filename"];
    $fileallinfo["filesize"] = 0;

    $fileallinfo["url_basename"] = $url_basename;

    if( $file_type != "directory" ){
        if( isset($file_info["extension"]) ){
            $filexcount = strlen($file_info["extension"]);
            $fileallinfo["extension"] = "000000000/".$file_info["extension"]."/";
            $fileallinfo["extension"] = $file_info["extension"].substr($fileallinfo["extension"],$filexcount);
        }else{
            $fileallinfo["extension"] = "txt000000/txt/";
        }
        $fileallinfo["filesize"] = $file_size;
        $fileallinfo["cando"] = "打开面板";
    }else{
        $exFlop = $fileallinfo["extension"]."/".$file_info["basename"]."/";
        $fileallinfo["extension"] = $exFlop;
    }

    array_push($filesArray, $fileallinfo);
}
//插入序列名称
if( count($squ_full_list) != 0 ){    
    foreach ($squ_full_list as $key => $value) {
        $squ_full_listnow = $squ_full_list[$key];
        $squ_size = 0;
        foreach ($squ_full_listnow as $key2 => $value2) {
            $file_path = $fullpath."/".$value2;
            $file_size_org = filesize($file_path);
            $squ_size = $squ_size + $file_size_org;
        }
        
        if( $squ_size/1024 < 1 ){
            $file_size = (intval(($squ_size)*100)/100) ." Bt";
        }elseif ($squ_size/1024/1024 < 1 ) {
            $file_size = (intval(($squ_size/1024)*100)/100) ." KB";
        }elseif ($squ_size/1024/1024/1024 < 1 ) {
            $file_size = (intval(($squ_size/1024/1024)*100)/100) ." MB";
        }elseif ($squ_size/1024/1024/1024/1024 < 1 ) {
            $file_size = (intval(($squ_size/1024/1024/1024)*100)/100) ." GB";
        }
        $squ_name = $squ_full_listnow[0]."=>". $squ_full_listnow[count($squ_full_listnow)-1];

        $file_path = $fullpath."/".$squ_full_listnow[count($squ_full_listnow)-1];
        $file_modify_time = filemtime($file_path);
        $file_modify_time = date('Y-m-d H:i:s', $file_modify_time);

        $squ_value = array(
            "null" => "",
            "file_id" => "",
            "cando" => "序列管理",
            "file_type" => "image/sequence",
            "file_modify_time" => $file_modify_time,
            "dirname" => $fullpath,
            "basename" => $squ_name,
            "extension" => "sequence0/sequence/",
            "filename" => $squ_name,
            "filesize" => $file_size,
            "url_basename" => $squ_name
        );
        array_push($filesArray,$squ_value);
    }
}

$returnA["info"] = "get file json";

$returnA["filesinfo"] = $filesArray;

echo json_encode($returnA);

//
}

function drop_error( $errormsg = "error", $errornum = 0 ){
    $json = json_encode( array( "stuta" => "error", "errornum" => $errornum, "errormsg" => $errormsg ) );
    echo( $json );
    die();
}