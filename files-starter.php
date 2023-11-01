<?php 
session_start();
include_once('inc/config.php');


?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Starter Page | Symox - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- gridjs css -->
        <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

        <!-- datepicker css -->
        <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <?php include_once("main-Begin_page.php"); ?>




<script>
    function openfileclick(){  
        alert("Test");  
    }  

    //点击后更新
    var openfile = document.getElementById("openfile");  
    openfile.addEventListener( "click", function() {
        console.log("1");
    });

    function UrlDecode(zipStr){ 
    var uzipStr = ''; 
    for (var i = 0; i < zipStr.length; i += 1) {
        var chr = zipStr.charAt(i); 
        if (chr === '+') { 
        uzipStr += ' ';
        } else if (chr === '%') { 
        var asc = zipStr.substring(i + 1, i + 3); 
        if (parseInt('0x' + asc) > 0x7f) {
            uzipStr += decodeURI('%' + asc.toString() + zipStr.substring(i+3, i+9).toString()); 
            i += 8;
        }else{ 
            uzipStr += AsciiToString(parseInt('0x' + asc)); 
            i += 2;
        } 
        }else{ 
        uzipStr += chr; 
        } 
    } 

    return uzipStr; 
    } 
    
    function StringToAscii(str){ 
    return str.charCodeAt(0).toString(16); 
    }

    function AsciiToString(asccode){ 
    return String.fromCharCode(asccode); 
    }


</script>




<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">
                                    CPU:<a id="cpuind">0</a>% <sup class="text-danger fw-medium font-size-14"><i class="" id="cpuUDicon"></i> <a id="cpuUD">0</a>% </sup>
                                    </h4>
<?php 
    $lastp = urldecode($_GET["filepath"]);
    $exp = explode('/',$lastp);
    unset($exp[count($exp)-1]);
    $lastp = implode('/',$exp);
    if( $lastp == '' ){
        $lastp = "root";
    }
?>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>

<script>
    lastcpuin = 0;
    clock(1);
    function clock(times){

        var request = new XMLHttpRequest()
        request.open('GET', 'http://127.0.0.1:9000/xamapp/api?test=cpu', true)
        request.onload = function () {
        // Begin accessing JSON data here
        var data = JSON.parse(this.response)

        if (request.status >= 200 && request.status < 400) {
            //console.log(data[0].cpuin)
            var element=document.getElementById("cpuind");
            element.innerHTML=data[0].cpuin;
            
            var element2=document.getElementById("cpuUDicon");
            if( data[0].cpuin>lastcpuin ){
                document.getElementById("cpuUDicon").class="mdi mdi-arrow-up";
            }else{
                document.getElementById("cpuUDicon").class="mdi mdi-arrow-down";
            }

            var element3=document.getElementById("cpuUD");
            var cpuud = data[0].cpuin - lastcpuin;
            var s = cpuud.toString();
            var res = s.substring(0, s.indexOf(".")+3);
            element3.innerHTML=res;

            lastcpuin =  data[0].cpuin;

        } else {
            console.log('error');
        }
        }

        request.send()

        if(times>0){
        //倒计时的秒数递减1
        times=times+1;
        //定时1秒，然后调用自身clock方法
        //每次递减1，不停调用自身，实现循环，直到times=0
        setTimeout(
            function (){
            clock(times);
            }, 1000);
        }else{
        alert("倒计时结束");
    } }
</script>

                                            <li class="breadcrumb-item active">Inbox</li>
                                        </ol>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <!-- Left sidebar -->
                                <div class="email-leftbar card">
                                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
                                        Compose
                                    </button>
                                    <div class="mail-list mt-4">
                                        <a href="email-inbox.html" class="active"><i class="mdi mdi-email-outline font-size-16 align-middle me-2"></i> Inbox <span class="ms-1 float-end">(18)</span></a>
                                        <a href="#"><i class="mdi mdi-star-outline font-size-16 align-middle me-2"></i>Starred</a>
                                        <a href="#"><i class="mdi mdi-diamond-stone font-size-16 align-middle me-2"></i>Important</a>
                                        <a href="#"><i class="mdi mdi-file-outline font-size-16 align-middle me-2"></i>Draft</a>
                                        <a href="#"><i class="mdi mdi-email-check-outline font-size-16 align-middle me-2"></i>Sent Mail</a>
                                        <a href="#"><i class="mdi mdi-trash-can-outline font-size-16 align-middle me-2"></i>Trash</a>
                                    </div>
        
        
                                    <h6 class="mt-4">Labels</h6>
        
                                    <div class="mail-list mt-1">
                                        <a href="#"><span class="mdi mdi-circle-outline text-info float-end"></span>Theme Support</a>
                                        <a href="#"><span class="mdi mdi-circle-outline text-warning float-end"></span>Freelance</a>
                                        <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>Social</a>
                                        <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>Friends</a>
                                        <a href="#"><span class="mdi mdi-circle-outline text-success float-end"></span>Family</a>
                                    </div>
                                    
                                </div>
                                <!-- End Left sidebar -->
        
        
                                <!-- Right Sidebar -->
                                <div class="email-rightbar mb-3">
                                    
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="position-relative">
                                                <div class="modal-button mt-2">
                                                    <a href="?filepath=<?php echo urlencode( $lastp ); ?>"><button type="button" class="btn btn-success waves-effect waves-light" id="openfile" >上一级</button></a>
                                                    <a href="?filepath=root"><button type="button" class="btn btn-danger waves-effect waves-light" id="test" >HOME</button></a>
                                                 </div>
                                            </div>
                                            <div id="table-ecommerce-orders"></div>
                                        </div>

                                    </div> <!-- card -->

        
                                </div> <!-- end Col-9 -->
        
                            </div>
        
                        </div><!-- End row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                 <!-- Modal -->
                 <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="To">
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="mb-3">
                                        <div id="email-editor"></div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send SB <i class="fab fa-telegram-plane ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
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

        <!-- gridjs js -->
        <script src="assets/libs/gridjs/gridjs.umd.js"></script>

        <!-- datepicker js -->
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

        <script>
            var url_get = '<?php echo "http://10.0.1.111/api/?key=c9utyqaw379r7hcqw36&mod=files&motion=r&path=".$_GET['filepath']; ?>';
            var url_get2 = 'http://10.0.1.111/api/?key=c9utyqaw379r7hcqw36&mod=files&motion=r&path=ROOT%2F20230823zsMINI';

            function alt() {
                alert("你好，我是一个警告框！");
            }
            
            // https://gridjs.io/docs/examples/pagination
            gridt = new gridjs.Grid(
                {
                    columns: [
                        {
                            name: "#",
                            sort: {
                                enabled: !1
                            },
                            formatter: function (a) {
                                return gridjs.html('<div class="form-check font-size-16"><input class="form-check-input" type="checkbox" id="orderidcheck01"><label class="form-check-label" for="orderidcheck01"></label></div>')
                            }
                        },
                        {
                            name: "类型",
                            formatter: function (a) {
                                if( a.slice(0,9) == "directory" ){
                                    console.log(a.slice(10,-1));
                                    var url = "<?php echo urldecode( $_GET['filepath'] ); ?>/"+a.slice(10,-1)
                                    var UrlEncode  = encodeURIComponent(url)
                                }
                                switch (a.slice(0,9)) {
                                    case "directory": return gridjs.html('<a href="?filepath='+UrlEncode+'"><button type="button" class="btn btn-outline-warning waves-effect waves-light" >' + " 进入文件夹" + "</button></a>");
                                    case "blend0000": return gridjs.html('<button type="button" class="btn btn-outline-info waves-effect waves-light" >' + a.slice(10,-1) + "</button>"); 
                                    case "blend1000": return gridjs.html('<button type="button" class="btn btn-outline-warning waves-effect waves-light" > 清理 </button>'); 
                                    case "sequence0": return gridjs.html('<button type="button" class="btn btn-outline-danger waves-effect waves-light" >预览</button>  <button type="button" class="btn btn-outline-info waves-effect waves-light" >操作</button>'); 
                                    default: return gridjs.html('<button type="button" class="btn btn-outline-secondary waves-effect waves-light" >' + a.slice(10,-1) + "</button>")
                                }
                            }
                        },
                        "文件名",
                        "备注名",
                        {
                            name: "大小",
                            sort: {   
                                compare: (a, b) => {
                                    const codeorg = (x) => x;
                                    if( codeorg(a) == 0 ){
                                        return -1;
                                    }else if(codeorg(b) == 0){
                                        return 1;
                                    }else{

                                        const code = (x) => x.slice(0,-3);
                                        const codename = (x) => x.slice(-3);

                                        var an;
                                        var bn;

                                        if( codename(a) == " Bt" ){
                                            an = code(a);
                                        }
                                        if( codename(a) == " KB" ){
                                            an = code(a) * 1024;
                                        }
                                        if( codename(a) == " MB" ){
                                            an = code(a) * 1024 * 1024;
                                        }
                                        if( codename(a) == " GB" ){
                                            an = code(a) * 1024 * 1024* 1024;
                                        }

                                        if( codename(b) == " Bt" ){
                                            bn = code(b);
                                        }
                                        if( codename(b) == " KB" ){
                                            bn = code(b) * 1024;
                                        }
                                        if( codename(b) == " MB" ){
                                            bn = code(b) * 1024 * 1024;
                                        }
                                        if( codename(b) == " GB" ){
                                            bn = code(b) * 1024 * 1024* 1024;
                                        }

                                        if (an > bn) {
                                            return 1;
                                        } else if (bn > an) {
                                            return -1;
                                        } else {
                                            return 0;
                                        }
                                    }
                                }
                            }
                        },
                        {
                            name: "状态",
                            formatter: function (a) {
                                switch (a) {
                                    case "Paid": return gridjs.html('<span class="badge badge-pill badge-soft-success font-size-12">' + a + "</span>");
                                    case "Chargeback": return gridjs.html('<span class="badge badge-pill badge-soft-danger font-size-12">' + a + "</span>"); 
                                    case "Refund": return gridjs.html('<span class="badge badge-pill badge-soft-warning font-size-12">' + a + "</span>"); 
                                    default: return gridjs.html('<span class="badge badge-pill badge-soft-success font-size-12">' + a + "</span>")
                                }
                            }
                        },
                        "最后修改时间",
                        {
                            name: "系统操作",
                            formatter: function (a) {
                                switch (a) {
                                    case "文件夹": return gridjs.html('<button type="button" class="btn btn-success btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal"> 系统打开 </button>')
                                    default: return gridjs.html('<button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">' + a + "</button>")
                                }
                            }
                        },
                        {
                            name: "管理",
                            sort: { enabled: !1 },
                            formatter: function (a) {
                                return gridjs.html('<div class="d-flex gap-3"><a href="javascript:alt();" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a><a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a></div>')
                            }
                        }
                    ],
                    pagination: {
                        limit: 20
                    },
                    sort: !0,
                    search: !0,
                    server: {
                        url: url_get,
                        then: data => data.filesinfo.map(card => ["", card.extension, card.url_basename, card.null, card.filesize, "null",card.file_modify_time, card.cando])
                    } 
                    
                }
            ).render(
                document.getElementById(
                    "table-ecommerce-orders"
                )
            ),
            flatpickr("#order-date",{ defaultDate: new Date, dateFormat: "d M, Y"});
            function update(url_new){
                gridt2.updateConfig({
                    server: {
                            url: url_new,
                            then: data => data.filesinfo.map(card => ["", card.extension, card.url_basename, card.null, card.filesize, card.file_modify_time, "test2", card.cando])
                        } 
                });
            }
        </script>
        <script src="assets/js/app.js"></script>

    </body>
</html>
