<?php 
session_start();
include_once('inc/config.php');

//INSERT INTO `xideal_fileslinkmoto` (`id`, `bcycid`, `filetype`, `filepath`, `filename`, `nikiname`, `status`, `hash`, `addtime`, `node`) VALUES ('1000000000', '10001', 'blend', 'D:\\Project\\20230823zsMINI\\ZS-MINI\\SR试做最终结构数据2023.05.27', 'jc_bl.blend', '复古街车 bl 材质cycle渲染文件', '1', '', 'current_timestamp(6).000000', '{\"0\": \"0\"}');

?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Product Detail | Symox - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

        <!-- gridjs css -->
        <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

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
                                    <h4 class="mb-0">Product Detail</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Product Detail</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row" id="fileZone" ondrop="drop(event)">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="product-detail" dir="ltr">
                                                    <div class="product-wishlist">
                                                        <a href="#">
                                                            <i class="mdi mdi-heart-outline"></i>
                                                        </a>
                                                    </div>
                                                    <div class="swiper product-thumbnail-slider rounded border overflow-hidden position-relative">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide"><img src="img\mtocyc_logo.png.gz" class="img-fluid d-block" /></div>
                                                            <div class="swiper-slide"><img src="assets/images/product/img-2.png" class="img-fluid d-block" /></div>
                                                            <div class="swiper-slide"><img src="assets/images/product/img-3.png" class="img-fluid d-block" /></div>
                                                            <div class="swiper-slide"><img src="assets/images/product/img-6.png" class="img-fluid d-block" /></div>
                                                           <div class="swiper-slide"><img src="assets/images/product/img-5.png" class="img-fluid d-block" /></div>
                                                        </div>
                                                        
                                                       <div class="d-none d-md-block">
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                       </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <div thumbsSlider="" class="swiper product-nav-slider mt-2 overflow-hidden">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide rounded">
                                                                    <div class="nav-slide-item"><img src="img\mtocyc_logo.png.gz" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-2.png" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-3.png" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-6.png" class="img-fluid d-block" /></div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="nav-slide-item"><img src="assets/images/product/img-5.png" class="img-fluid d-block" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row text-center mt-3">
                                                        <div class="col-sm-6">
                                                            <div class="d-grid">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart-alt me-2"></i> Add to cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="d-grid">
                                                                <button type="button" class="btn btn-light waves-effect  mt-2 waves-light">
                                                                    <i class="bx bx-shopping-bag me-2"></i>Buy now
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="mt-4 mt-xl-3 ps-xl-4">
                                                    <h5 class="font-size-14"><a href="#" class="text-muted">宗盛</a></h5>
                                                    <h4 class="font-size-20 mb-3">宗盛 迷你复古</h4>

                                                    <div class="text-muted">
                                                        <span class="badge bg-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
                                                    </div>

                                                    <h5 class="mt-4 pt-2"><del class="text-muted me-2">$280</del>$260 <span class="text-danger font-size-14 ms-2">- 20 % Off</span></h5>

                                                    <p class="mt-4 text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular</p>

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    
                                                                    <h5 class="font-size-14">Specification :</h5>
                                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> High Quality</li>
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Leather</li>
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> All Sizes available</li>
                                                                        <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> 4 Different Color</li>
                                                                    </ul>
                                                                      
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mt-3">
                                                                    <h5 class="font-size-14">Services :</h5>
                                                                    <ul class="list-unstyled product-desc-list text-muted">
                                                                        <li><i class="bx bx-log-in-circle text-primary me-1"></i> 10 Days Replacement</li>
                                                                        <li><i class="bx bx-dollar-circle text-primary me-1"></i> Cash on Delivery available</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                                    
                                                            <h5 class="font-size-14 mb-3"><i class="bx bx-map-pin font-size-20 text-primary align-middle me-2"></i> Delivery location</h5>
                                                            
                                                            <div class="d-inline-flex">
                                                            
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" placeholder="Enter Delivery pincode ">
                                                                    
                                                                    <button class="btn btn-light" type="button">Check</button>
                                                                
                                                                </div>
                                                            </div>
                                                              
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-7 col-sm-8">
                                                                <div class="product-desc-color mt-3">
                                                                    <h5 class="font-size-14">Colors :</h5>
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray">
                                                                                <div class="product-color-item">
                                                                                    <img src="assets/images/product/img-1.png" alt="" class="avatar-md">
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark">
                                                                                <div class="product-color-item">
                                                                                    <img src="assets/images/product/img-2.png" alt="" class="avatar-md">
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Purple">
                                                                                <div class="product-color-item">
                                                                                    <img src="assets/images/product/img-3.png" alt="" class="avatar-md">
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-primary border-0 p-1" data-bs-toggle="modal" data-bs-target="#color-img">
                                                                                2 + Colors
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-5 col-sm-4">
                                                                <div class="mt-3">
                                                                    <h5 class="font-size-14 mb-3">Select Sizes :</h5>

                                                                    <div class="d-inline-flex">
                                                                        <select class="form-select w-sm">
                                                                            <option value="1">3</option>
                                                                            <option value="2">4</option>
                                                                            <option value="3">5</option>
                                                                            <option value="4">6</option>
                                                                            <option value="5" selected>7</option>
                                                                            <option value="6">8</option>
                                                                            <option value="7">9</option>
                                                                            <option value="8">10</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">

                                        <div class="gridjs-head">
                                            <div class="gridjs-search">
                                                <input type="search" placeholder="Type a keyword..." aria-label="Type a keyword..." class="gridjs-input gridjs-search-input">
                                            </div>
                                        </div>
                               
                                        <div class="gridjs-wrapper" style="height: auto;">

                                            <table role="grid" class="gridjs-table" style="height: auto;">
                                            
                                            <thead class="gridjs-thead">
                                                <tr class="gridjs-tr">
                                                    <th data-column-id="名字" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 140px; width: 250px;">
                                                        <div class="gridjs-th-content">
                                                            文件名
                                                        </div>
                                                        <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 68px; width: 140px;">
                                                        <div class="gridjs-th-content">
                                                            文件类型
                                                        </div>
                                                        <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="email" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 180px; width:  310px;">
                                                        <div class="gridjs-th-content">
                                                            备注名称
                                                        </div>
                                                        <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="position" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 320px; width: 545px;">
                                                        <div class="gridjs-th-content">
                                                            操作
                                                        </div>
                                                        <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                    <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 126px; width: 215px;">
                                                        <div class="gridjs-th-content">
                                                            归类
                                                        </div>
                                                        <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="gridjs-tbody">
                                                
<script>
    //参数content为被被复制的内容
    //const content = "我是被复制的内容";//input模式，忽略文本格式
    function copy(content) {
        // 创建输入框元素
        const input = document.createElement('input');
        input.value = content;
        document.body.appendChild(input);
        input.select();
        document.execCommand('Copy');
        input.remove();
    }

</script>

<?php 

$sql = "SELECT * FROM `xideal_fileslinkmoto`;";

$result = $conn->query($sql);
$row = $result -> fetch_all();
foreach ($row as $key => $value) {

    $openlink = 'onclick="window.open(\'linkwindow.php?cmd='.urlencode('start "" "'. $value[3]."/".$value[4].'"').'\')" ';
    $openlink2 = 'onclick="window.open(\'linkwindow.php?cmd='.urlencode('start "" "'. $value[3].'"').'\')" ';
    $filefullpath0 =str_replace("\\", "\\\\",$value[3]);
    $filefullpath =str_replace("\\", "\\\\",$value[3]."/".$value[4]);
    
    $classify = $filelinktypelist[$value[6]];

    $trecho = <<<we

    <tr class="gridjs-tr">
    <td data-column-id="name" class="gridjs-td">
        $value[4]
    </td>
    
    <td data-column-id="name" class="gridjs-td">
        $value[2]
    </td>
    
    <td data-column-id="email" class="gridjs-td">
        $value[5]
    </td>
    
    <td data-column-id="position" class="gridjs-td">
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-success waves-effect btn-label waves-light" $openlink>
                <i class="bx bx-check-double label-icon"></i> 
                打开文件
            </button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-outline-success waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                    其他方式 <i class="mdi mdi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                    <li><a class="dropdown-item" href="">Notepad++</a></li>
                    <li><a class="dropdown-item" href="">Blender ImgViewer</a></li>
                    <li><a class="dropdown-item" href="">Houdini Viewer</a></li>
                </ul>
            </div>
        </div>
        <button type="button" class="btn btn-outline-secondary waves-effect" $openlink2>打开所在目录</button>
        <button type="button" class="btn btn-outline-info waves-effect" onclick="copy('$filefullpath0')">复制路径</button>
        <button type="button" class="btn btn-warning waves-effect waves-light">
            <i class="bx bx-error font-size-16 align-middle me-2"></i> 
            从列表移除
        </button>
    </td>
    
    <td data-column-id="company" class="gridjs-td">
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-outline-info waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                $classify<i class="mdi mdi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                <li><a class="dropdown-item"  onclick="copy('$filefullpath0')">复制文件路径</a></li>
                <li><a class="dropdown-item"  onclick="copy('$filefullpath')">复制目录路径</a></li>
            </ul>
        </div>
    </td>
    </tr>
    
    we;
    echo($trecho);
}

?>

                                            </tbody>
                                        </table>

                                        <div class="gridjs-footer">
                                            <div class="gridjs-pagination">
                                                <div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 2">
                                                    Showing <b> <?php echo(0) ?> </b> results
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- sample modal content -->
                <div id="color-img" class="modal fade" tabindex="-1" aria-labelledby="color-imgLabel" aria-hidden="true" data-bs-scroll="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="color-imgLabel">Product Images</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="product-desc-color">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Gray">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-1.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dark">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-2.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Purple">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-3.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sky">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-4.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Green">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-5.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="White">
                                                <div class="product-color-item">
                                                    <img src="assets/images/product/img-6.png" alt="" class="avatar-md">
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                              
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
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
        
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- swiper js -->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <script src="assets/js/pages/ecommerce-product-detail.init.js"></script>

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
                    console.log(files);
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
        </script>

        <script src="assets/js/app.js"></script>


    </body>
</html>
