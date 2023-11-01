<?php 
session_start();
include_once('inc/config.php');
?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />车辆信息
        <title>车辆信息 | Xideal - Ninniku</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- nouisliderribute css -->
        <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">


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
                                    <h4 class="mb-0">车辆信息</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">项目总览</a></li>
                                            <li class="breadcrumb-item active">车辆信息</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-transparent border-bottom">
                                        <h5 class="mb-0">Filters</h5>
                                    </div>

                                    <div class="p-4">
                                        <h5 class="font-size-14 mb-3">Categories</h5>
                                        <div class="custom-accordion">
                                            <a class="text-body fw-semibold pb-2 d-block" data-bs-toggle="collapse" href="#categories-collapse" role="button" aria-expanded="false" aria-controls="categories-collapse">
                                                <i class="mdi mdi-chevron-up accor-down-icon text-primary me-1"></i> Footwear
                                            </a>
                                            <div class="collapse show" id="categories-collapse">
                                                <div class="card p-2 border shadow-none">
                                                    <ul class="list-unstyled categories-list mb-0">
                                                        <li><a href="#" class="text-body"><i class="mdi mdi-circle-medium me-1"></i> Formal Shoes</a></li>
                                                        <li class="active"><a href="#" class="text-body"><i class="mdi mdi-circle-medium me-1"></i> Sports Shoes</a></li>
                                                        <li><a href="#" class="text-body"><i class="mdi mdi-circle-medium me-1"></i> casual Shoes</a></li>
                                                        <li><a href="#" class="text-body"><i class="mdi mdi-circle-medium me-1"></i> Sandals</a></li>
                                                        <li><a href="#" class="text-body"><i class="mdi mdi-circle-medium me-1"></i> Slippers</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="p-4 border-top">
                                        <div>
                                            <h5 class="font-size-14 mb-3">Price</h5>
                                            <div id="priceslider" class="mb-4"></div>
                                        </div>
                                    </div>

                                    <div class="custom-accordion">
                                        <div class="p-4 border-top">
                                            <div>
                                                <h5 class="font-size-14 mb-0"><a href="#filtersizes-collapse" class="text-dark d-block" data-bs-toggle="collapse">Sizes <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>
    
                                                <div class="collapse show" id="filtersizes-collapse">
                                                    <div class="mt-4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h5 class="font-size-15 mb-0">Select Sizes</h5>
                                                            </div>
                                                            <div class="w-xs">
                                                                <select class="form-select">
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

                                        <div class="p-4 border-top">
                                            <div>
                                                <h5 class="font-size-14 mb-0"><a href="#filterprodductcolor-collapse" class="text-dark d-block" data-bs-toggle="collapse">Colors <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>
    
                                                <div class="collapse show" id="filterprodductcolor-collapse">
                                                    <div class="mt-4">
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck1">
                                                            <label class="form-check-label" for="productcolorCheck1"><i class="mdi mdi-circle text-dark mx-1"></i> Black</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck2">
                                                            <label class="form-check-label" for="productcolorCheck2"><i class="mdi mdi-circle text-light mx-1"></i> White</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck3">
                                                            <label class="form-check-label" for="productcolorCheck3"><i class="mdi mdi-circle text-secondary mx-1"></i> Gray</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck4">
                                                            <label class="form-check-label" for="productcolorCheck4"><i class="mdi mdi-circle text-primary mx-1"></i> Blue</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck5">
                                                            <label class="form-check-label" for="productcolorCheck5"><i class="mdi mdi-circle text-success mx-1"></i> Green</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck6">
                                                            <label class="form-check-label" for="productcolorCheck6"><i class="mdi mdi-circle text-danger mx-1"></i> Red</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck7">
                                                            <label class="form-check-label" for="productcolorCheck7"><i class="mdi mdi-circle text-warning mx-1"></i> Yellow</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" class="form-check-input" id="productcolorCheck8">
                                                            <label class="form-check-label" for="productcolorCheck8"><i class="mdi mdi-circle text-purple mx-1"></i> Purple</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="p-4 border-top">
                                            <div>
                                                <h5 class="font-size-14 mb-0"><a href="#filterproduct-color-collapse" class="text-dark d-block" data-bs-toggle="collapse">Customer Rating <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>
    
                                                <div class="collapse show" id="filterproduct-color-collapse">
                                                    <div class="mt-4">
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productratingRadio1" name="productratingRadio1" class="form-check-input">
                                                            <label class="form-check-label" for="productratingRadio1">4 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productratingRadio2" name="productratingRadio1" class="form-check-input">
                                                            <label class="form-check-label" for="productratingRadio2">3 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productratingRadio3" name="productratingRadio1" class="form-check-input">
                                                            <label class="form-check-label" for="productratingRadio3">2 <i class="mdi mdi-star text-warning"></i>  & Above</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productratingRadio4" name="productratingRadio1" class="form-check-input">
                                                            <label class="form-check-label" for="productratingRadio4">1 <i class="mdi mdi-star text-warning"></i></label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="p-4 border-top">
                                            <div>
                                                <h5 class="font-size-14 mb-0"><a href="#filterproduct-discount-collapse" class="collapsed text-dark d-block" data-bs-toggle="collapse">Discount <i class="mdi mdi-chevron-up float-end accor-down-icon"></i></a></h5>
    
                                                <div class="collapse" id="filterproduct-discount-collapse">
                                                    <div class="mt-4">
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productdiscountRadio1" name="productdiscountRadio" class="form-check-input">
                                                            <label class="form-check-label" for="productdiscountRadio1">50% or more</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productdiscountRadio2" name="productdiscountRadio" class="form-check-input">
                                                            <label class="form-check-label" for="productdiscountRadio2">40% or more</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productdiscountRadio3" name="productdiscountRadio" class="form-check-input">
                                                            <label class="form-check-label" for="productdiscountRadio3">30% or more</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productdiscountRadio4" name="productdiscountRadio" class="form-check-input">
                                                            <label class="form-check-label" for="productdiscountRadio4">20% or more</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productdiscountRadio5" name="productdiscountRadio" class="form-check-input">
                                                            <label class="form-check-label" for="productdiscountRadio5">10% or more</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input type="radio" id="productdiscountRadio6" name="productdiscountRadio" class="form-check-input">
                                                            <label class="form-check-label" for="productdiscountRadio6">Less than 10%</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h5>搜索展示</h5>
                                                        <ol class="breadcrumb p-0 bg-transparent mb-2">
                                                            <li class="breadcrumb-item"><a href="javascript: void(0);">暂留</a></li>
                                                            <li class="breadcrumb-item active">车辆</li>
                                                        </ol>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="form-inline float-md-end">
                                                        <div class="search-box ms-2">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                                                <i class="bx bx-search search-icon"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">
                                                <li class="nav-item">
                                                    <a class="nav-link disabled fw-medium" href="#" tabindex="-1" aria-disabled="true">排序:</a>
                                                  </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#popularity" role="tab" href="#">项目时间</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#newest" role="tab" href="#">分支截止时间</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#discount" role="tab" href="#">pid</a>
                                                </li>
                                            </ul>

                                              <!-- Tab panes -->
                                                <div class="tab-content p-3 text-muted">
                                                    <div class="tab-pane active" id="popularity" role="tabpanel">
                                                        <div class="row">
<?php 
$src_path = 'img\Project\\20230823zsMINI\ZS-MINI\复古试做最终结构数据2023.05.17\DSC03891.jpg';

//imagejpeg( $img, $src_path );
$divbox = <<<dbox
    <div class="col-xl-4 col-sm-6">
    <div class="product-box">
        <div class="product-ribbon">
            2天截止
        </div>
        <div class="product-img pt-4 px-4">
            <div class="product-wishlist">
                <a href="#">
                    <i class="mdi mdi-heart-outline"></i>
                </a>
            </div>
            <img src="//" alt="" class="img-fluid mx-auto d-block">
        </div>
        
        <div class="product-content p-4">
            
            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Nike N012 Shoes</a></h5>
                    <p class="text-muted font-size-13">Gray, Shoes</p>
                    <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$280</del></span> $260</h5>
                </div>

                <div>
                    <ul class="list-inline mb-0 text-muted product-color">
                        <li class="list-inline-item">
                            Colors :
                        </li>
                        <li class="list-inline-item">
                            <i class="mdi mdi-circle text-dark"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="mdi mdi-circle text-light"></i>
                        </li>
                        <li class="list-inline-item">
                            <i class="mdi mdi-circle text-primary"></i>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
dbox;
?>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        2天截止
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="img\Project\20230823zsMINI\ZS-MINI\复古试做最终结构数据2023.05.17\DSC03891.JPG" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
                                                                        
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Nike N012 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Gray, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$280</del></span> $260</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-primary"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        - 20 %
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Adidas Running Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Black, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$250</del></span> $240</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-danger"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
            
                                                                    </div>
            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-img pt-4 px-4">
                                                                        
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Puma P103 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Purple, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$260</del></span> $250</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-purple"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-4.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Sports S120 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Cyan, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$240</del></span> $230</h5>
                                                                            </div>
                                                                        
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-info"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-success"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        
                                                                        </div>
            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-img pt-4 px-4">
            
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Adidas AB23 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Blue, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$240</del></span> $250</h5>
                                                                            </div>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 text-muted product-color">
                                                                                <li class="list-inline-item">
                                                                                    Colors :
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <i class="mdi mdi-circle text-dark"></i>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <i class="mdi mdi-circle text-light"></i>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <i class="mdi mdi-circle text-primary"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
            
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        - 20 %
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-6.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Nike N012 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Gray, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$270</del></span> $260</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>

                                                    <div class="tab-pane" id="newest" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        New
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Puma P103 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Purple, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$260</del></span> $250</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-purple"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        New
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-4.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Sports S120 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Cyan, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$240</del></span> $230</h5>
                                                                            </div>
                                                                        
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-info"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-success"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        
                                                                        </div>
            
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        New
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Adidas AB23 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Blue, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$240</del></span> $250</h5>
                                                                            </div>
                                                                        <div>
                                                                            <ul class="list-inline mb-0 text-muted product-color">
                                                                                <li class="list-inline-item">
                                                                                    Colors :
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <i class="mdi mdi-circle text-dark"></i>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <i class="mdi mdi-circle text-light"></i>
                                                                                </li>
                                                                                <li class="list-inline-item">
                                                                                    <i class="mdi mdi-circle text-primary"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
            
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                       New
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Adidas Running Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Black, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$250</del></span> $240</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-danger"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
            
                                                                    </div>
            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                    <div class="tab-pane" id="discount" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        - 20 %
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
                                                                        
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Nike N012 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Gray, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$280</del></span> $260</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-primary"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        - 20 %
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
            
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Adidas Running Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Black, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$250</del></span> $240</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-danger"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
            
                                                                    </div>
            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="product-box">
                                                                    <div class="product-ribbon">
                                                                        - 20 %
                                                                    </div>
                                                                    <div class="product-img pt-4 px-4">
                                                                        <div class="product-wishlist">
                                                                            <a href="#">
                                                                                <i class="mdi mdi-heart-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                        <img src="assets/images/product/img-6.png" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                    
                                                                    <div class="product-content p-4">
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <h5 class="mb-1"><a href="ecommerce-product-detail.html" class="text-dark font-size-16">Nike N012 Shoes</a></h5>
                                                                                <p class="text-muted font-size-13">Gray, Shoes</p>
                                                                                <h5 class="mt-3 mb-0"><span class="text-muted me-2"><del>$270</del></span> $260</h5>
                                                                            </div>
            
                                                                            <div>
                                                                                <ul class="list-inline mb-0 text-muted product-color">
                                                                                    <li class="list-inline-item">
                                                                                        Colors :
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-dark"></i>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <i class="mdi mdi-circle text-light"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                </div>

                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <div>
                                                        <p class="mb-sm-0">Page 2 of 84</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="float-sm-end">
                                                        <ul class="pagination pagination-rounded mb-sm-0">
                                                            <li class="page-item disabled">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">4</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">5</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
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

        <!-- nouisliderribute js -->
        <script src="assets/libs/nouislider/nouislider.min.js"></script>
        <script src="assets/libs/wnumb/wNumb.min.js"></script>
        
        <!-- init js -->
        <script src="assets/js/pages/product-filter-range.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
