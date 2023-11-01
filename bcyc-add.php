<?php 
session_start();
include_once('inc/config.php');

$postin = false;
if( $_POST != null ) {
    $postin = true;
}

if( $postin && $_POST["bcycname"] != null ) {
    echo("提交到数据库");
}

$date = date('Ymd');
echo($date);

$sql = "SELECT * FROM `xideal_bcycinfo` WHERE `uid` LIKE '".$date."%';";
//var_dump($sql);
$result = $conn->query($sql);
$row = $result -> fetch_all();
$num = count($row) + 1;
if( $num < 10 ){
    $nums = "0".$num;
}else{
    $nums = "".$num;
}
$nums = $date.$nums;

if($_POST["uid"] != null ){
    $nums = $_POST["uid"];
}

//{"name": "John", "age": 30, "city": "New York"}
//INSERT INTO `xideal_bcycinfo` (`id`, `name`, `uid`, `pid`, `model`, `natstandard`, `remark`, `showimg`, `otherinfo`) VALUES ('10000', '测试名字', '2023082801', NULL, '{\"0\": \"仿赛\"}', '0', '短备注', NULL, '详细信息');

if( $postin && $_POST["bcycname"] != null ) {
    $sql = "INSERT INTO `xideal_bcycinfo` (`id`, `name`, `company`, `uid`, `pid`, `model`, `natstandard`, `remark`, `showimg`, `otherinfo`) VALUES (' ', '".$_POST["bcycname"]."','".$_POST["company"]."', '".$nums."', '".$_POST["pid"]."', '{\"0\": \"".$_POST["model"]."\"}', '".$_POST["natstandard"]."', '".$_POST["remark"]."', NULL, '".$_POST["info"]."');";
    //echo($sql);
    $result = $conn->query($sql);
}
?>


<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>添加车辆项目 | Xideal </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- choices css -->
        <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <?php include_once("main-Begin_page.php"); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">添加车辆项目</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">车辆项目</a></li>
                                            <li class="breadcrumb-item active">添加车辆项目</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div id="addproduct-accordion" class="custom-accordion">
                                    <div class="card">
                                        <a href="#addproduct-productinfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-productinfo-collapse">
                                            <div class="p-4">
                                                
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-sm">
                                                            <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                                01
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-16 mb-1">车辆信息</h5>
                                                        <p class="text-muted text-truncate mb-0">填写所有的车辆信息</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </a>

                                        <div id="addproduct-productinfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                                            <div class="p-4 border-top">

                                            <script>
                                                function checkUser(){
                                                    console.log(document);
                                                    document.getElementById("formid").submit();
                                                }
                                            </script>

                                                <form id="formid" method='post'>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="choices-single-specifications" class="form-label">所属公司</label>
                                                                <select class="form-control" data-trigger name="company"
                                                                    id="choices-single-specifications">
                                                                    <option value="1" selected>默认无所属</option>
<?php 
$sql = "SELECT * FROM `xideal_companys` WHERE 1;";

$result = $conn->query($sql);
$row = $result -> fetch_all();
foreach ($row as $key => $value) {
    if( $value[0] == "1" ){
        continue;
    }
    $echofor = ' <option value="'.$value[0].'">'.$value[2].'</option> ';
    echo($echofor);
}

?>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="productname" <?php if( $postin && $_POST['bcycname'] == null ) echo("style = color:#FF0000"); ?> >
                                                                中英文全称 *180字符限制</label>
                                                                <input id="productname" name="bcycname" placeholder="输入名称" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            
                                                            <div class="mb-3">
                                                                <label class="form-label" for="manufacturername">UID *管理器uid尽量不动</label>
                                                                <input  value="<?php  echo($nums); ?>" id="manufacturername" name="uid" placeholder="不可为空 留空自动生成" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            
                                                            <div class="mb-3">
                                                                <label class="form-label" for="manufacturerbrand">项目序号 *NUll</label>
                                                                <input id="manufacturerbrand" name="pid" placeholder="输入序号 可以留空" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="price">备注</label>
                                                                <input id="price" name="remark" placeholder="输入备注" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="choices-single-default" class="form-label">首选型号 *可后多选</label>
                                                                <select class="form-control" data-trigger name="model"
                                                                    id="choices-single-category">
                                                                    <option value="仿赛" selected>仿赛</option>
                                                                    <option value="街车">街车</option>
                                                                    <option value="消费">消费</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="choices-single-specifications" class="form-label">是否有国标</label>
                                                                <select class="form-control" data-trigger name="natstandard"
                                                                    id="choices-single-specifications">
                                                                    <option value="0" selected>无国标</option>
                                                                    <option value="1">有国标</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-0">
                                                        <label class="form-label" for="productdesc">介绍</label>
                                                        <textarea class="form-control" id="productdesc" name="info" placeholder="输入介绍" rows="4"></textarea>
                                                    </div>
                                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row mb-4">
                            <div class="col text-end">
                                <a href="bcyc-list.php" class="btn btn-danger"> <i class="bx bx-x me-1"></i> 取消 </a>
                                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn" onclick="checkUser();" > 
                                    <i class=" bx bx-file me-1"></i>
                                    提交 
                                </a>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- successfully modal  -->
                <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true" data-bs-scroll="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                               <div class="text-center">
                                   <i class="bx bx-check-circle display-1 text-success"></i>
                                   <h3 class="mt-3">Product Added Successfully</h3>
                               </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Symox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include_once("main-Begin_page.php"); ?>

        <!-- Right Sidebar -->
        <a href="#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
            <i class="icon-sm mb-2" data-feather="settings"></i> <span class="align-middle">Settings</span>
        </a>

        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-primary p-3">

                    <h5 class="m-0 me-2 text-white">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Choose Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Theme Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div id="sidebar-setting">
                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                            <label class="form-check-label" for="sidebar-size-default">Default</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-size"
                                id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                        </div>

                        <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                            <label class="form-check-label" for="sidebar-color-light">Light</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                        </div>
                        <div class="form-check sidebar-setting">
                            <input class="form-check-input" type="radio" name="sidebar-color"
                                id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                            <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                        </div>
                    </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- choices js -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

         <!-- init js -->
         <script src="assets/js/pages/ecommerce-choices.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
