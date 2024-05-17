<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/jquery/jquery-3.7.1.min.js">
    <link rel="stylesheet" href="assets/js/layoutsite.js">
</head>
<body>
    <header class="section_header bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 py-3">
                    <img src="{{ asset('images/logo.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 py-2">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Trang chủ</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="#">Thương hiệu nổi bật</a>
                                    <a class="nav-link" href="#">Tin tức</a>
                                    <a class="nav-link" href="#">Hệ thống cửa hàng</a>
                                    <a class="nav-link" href="#">Liên hệ</a>
                                    <a class="nav-link" href="#">Sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 item-action py-4 d-flex group-action">
                    <div class="item-action px-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="item-action px-2">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="item-action px-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('images/banner1.webp') }}" alt="Los Angeles">
            </div>
            <div class="item">
                <img src="{{ asset('images/banner2.webp') }}" alt="Chicago">
            </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="col-md-12">
        <ul class="nav">
            <li class="nav-item px-5" style="text-align: center;">
                <a href="product_detail.html" title="Chi tiết sản phẩm">
                    <img src="{{ asset('images/sp1.webp') }}" style="width: 250px;">
                </a>
                <p><b>Đồng hồ Hublot Big Bang One</b></p>
                <ul class="nav py-2">
                    <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">38.000.000đ</li>
                    <li class="nav-item px-2"><del>48.000.000đ</del></li>
                    <i class="fa-solid fa-tag px-3" style="color: red;">
                        <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                        <i class="fa-solid fa-percent"></i>
                    </i>
                </ul>
            </li>
            <li class="nav-item px-5" style="text-align: center;">
                <a href="product_detail.html" title="Chi tiết sản phẩm">
                    <img src="{{ asset('images/sp2.webp') }}" style="width: 250px;">
                </a>
                <p><b>Đồng hồ Zenith Chronomaster Sport</b></p>
                <ul class="nav py-2">
                    <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">46.000.000đ</li>
                    <li class="nav-item px-2"><del>49.000.000đ</del></li>
                    <i class="fa-solid fa-tag px-3" style="color: red;">
                        <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                        <i class="fa-solid fa-percent"></i>
                    </i>
                </ul>
            </li>
            <li class="nav-item px-5" style="text-align: center;">
                <a href="product_detail.html" title="Chi tiết sản phẩm">
                    <img src="{{ asset('images/sp3.webp') }}" style="width: 250px;">
                </a>
                <p><b>Đồng hồ Rolex</b></p>
                <ul class="nav py-2">
                    <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">50.390.000đ</li>
                    <li class="nav-item px-2"><del>58.000.000đ</del></li>
                    <i class="fa-solid fa-tag px-3" style="color: red;">
                        <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                        <i class="fa-solid fa-percent"></i>
                    </i>
                </ul>
            </li>
            <li class="nav-item px-4" style="text-align: center;">
                <a href="product_detail.html" title="Chi tiết sản phẩm">
                    <img src="{{ asset('images/sp4.webp') }}" style="width: 250px;">
                </a>
                <p><b>Patek Philipe Complications</b></p>
                <ul class="nav py-2">
                    <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">26.390.000đ</li>
                    <li class="nav-item px-2"><del>28.000.000đ</del></li>
                    <i class="fa-solid fa-tag px-3" style="color: red;">
                        <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                        <i class="fa-solid fa-percent"></i>
                    </i>
                </ul>
            </li>
        </ul>
    </div>
    
    
</div>
<span style="padding-left: 43%;"  >
<button class="btn btn-primary" type="button">Xem thêm sản phẩm</button>
</span>
</div>
<!-- product_new -->
<div class="product_new">
    <div class="container py-4">
        <h2 style="text-align: center;">Sản phẩm mới</h2>
        <div class="new_product">
            <ul class="nav">
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <a href="product_detail.html" title="Chi tiết sản phẩm">
                        <img src="{{ asset('images/sp1.webp') }}" style="width: 200px;">
                    </a>                
                    <p><b>Áo Thun Nam Tay Ngắn In Hình</b></p>
                    <p><b>Form Regular</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del></li>
                        <i class="fa-solid fa-tag px-3" style="color: red;">
                            <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                            <i class="fa-solid fa-percent"></i>
                        </i>
                    </ul>
                </li>
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <a href="product_detail.html" title="Chi tiết sản phẩm">
                        <img src="{{ asset('images/sp2.webp') }}" style="width: 200px;">
                    </a>               
                    <p><b>Áo Thun Nam Tay Ngắn In Hình</b></p>
                    <p><b>Form Regular</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del></li>
                        <i class="fa-solid fa-tag px-3" style="color: red;">
                            <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                            <i class="fa-solid fa-percent"></i>
                        </i>
                    </ul>
                </li>
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <a href="product_detail.html" title="Chi tiết sản phẩm">
                        <img src="{{ asset('images/sp3.webp') }}" style="width: 200px;">
                    </a>                 
                    <p><b>Áo Thun Nam Tay Ngắn In Hình</b></p>
                    <p><b>Form Regular</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del></li>
                        <i class="fa-solid fa-tag px-3" style="color: red;">
                            <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                            <i class="fa-solid fa-percent"></i>
                        </i>
                    </ul>
                </li>
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <a href="product_detail.html" title="Chi tiết sản phẩm">
                        <img src="{{ asset('images/sp4.webp') }}" style="width: 200px;">
                    </a>      
                    <p><b>Áo Thun Nam Tay Ngắn In Hình</b></p>
                    <p><b>Form Regular</b></p>        
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del></li>
                        <i class="fa-solid fa-tag px-3" style="color: red;">
                            <i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i>
                            <i class="fa-solid fa-percent"></i>
                        </i>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="banner py-4">
    <div class="container">
        <ul class="nav">
            <li class="nav-item px-4">
                <img src="{{ asset('images/banner1.webp') }}" style="width: 400px;" alt="">
            </li>
            <li class="nav-item px-2">
                <img src="{{ asset('images/banner2.webp') }}" style="width: 400px;" alt="">
            </li>
        </ul>
    </div>
</div>

<!-- post_new -->
<div class="post_new">
    <div class="container py-2">
        <h2 style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" id="title py-3">Tin tức mới nhất</h2>
        <div class="col-md-12 py-2">
            <ul class="nav">
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <img src="{{ asset('images/tm1.webp') }}" style="width: 300px;" alt="">
                    <ul class="nav py-2" style="color: #525456;">
                        <li>Thứ Ba, 23/01/2024</li>
                    </ul>
                    <p><b>Đồng hồ Vacheron Constantin ra mắt phiên bản màu mới</b></p>
                </li>
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <img src="{{ asset('images/tm2.webp') }}" style="width: 300px;" alt="">
                    <ul class="nav py-2" style="color: #525456;">
                        <li>Thứ Ba, 23/01/2024</li>
                    </ul>
                    <p><b>Đồng hồ nữ Vacheron Constantin đầu tiên gắn tourbillon</b></p>
                </li>
                <li class="nav-item col-lg-4 col-md-6 col-12">
                    <img src="{{ asset('images/tm3.webp') }}" style="width: 300px;" alt="">
                    <ul class="nav py-2" style="color: #525456;">
                        <li>Thứ Ba, 23/01/2024</li>
                    </ul>
                    <p><b>Vacheron Constantin giới thiệu 5 mẫu Overseas tại triển lãm đồng hồ</b></p>
                </li>
            </ul>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <h4 class="title-footer no-menu">Về Ego Helios</h4>
                <div class="item">
                   <div class="icon">
                        <i class="fa-regular fa-map"></i>
                    <i class="font-monospace">Xuân Thủy, Hà Nội</i>
                   </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:support@sapo.vn" title="Gửi mail">support@sapo.vn</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                        <a class="fone" href="tel:0364199361" title="Gọi ngay 0364199361">0364199361</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon mapsico">
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="danh-sach-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <h4 class="title-footer arrow current">
                    Chính sách
                </h4>
                <ul class="list-menu current">
                    <li><a href="/"></a>Chính sách bán hàng</li>
                    <li><a href="/"></a>Chính sách mua hàng</li>
                    <li><a href="/"></a>Chính sách đổi trả</li>
                    <li><a href="/"></a>Chính sách đặc biệt</li>
                    <li><a href="/"></a>Chính sách Affiliate</li>
                    <li><a href="/"></a>Chính sách đại lý</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <h4 class="title-footer arrow current">
                    Dịch Vụ
                </h4>
                <ul class="list-menu current">
                    <li><a href="/"></a>Dịch vụ bảo trì</li>
                    <li><a href="/"></a>Dịch vụ EgoCare</li>
                    <li><a href="/"></a>Dịch vụ hàng</li>
                    <li><a href="/"></a>Dịch vụ vận chuyển</li>
                    <li><a href="/"></a>Dịch vụ sau bán</li>
                    <li><a href="/"></a>Dịch vụ mua lại</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <h4>Giờ mở cửa</h4>
                <p>Từ 9:00 - 21:30 tất cả các ngày trong tuần (bao gồm cả các ngày lễ, ngày Tết).</p>
                <h4>Góp ý kiến, khiếu nại</h4>
                <div class="item">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                        <a class="fone" href="tel:19006750" title="Gọi ngay 19006750">1900 6750</a>
                    </div>
                </div>
                <div class="form-subscribe d-flex">
                    <h4>Nhận khuyến mãi</h4>
                    <div class="formchip" id="formchimp">
                        <form id="mc-form" class="newsletter-form" data-toggle="validator" action="https://gmail.us2.list-manage.com/subscribe/post-json?u=ef7f65e3be67e30ff1c4bd591&amp;id=a7430e9bc5">
                            <div class="input-group">
                                <input aria-label="Địa chỉ Email" type="email" class="form-control" placeholder="Nhập email của bạn" name="EMAIL" required="" autocomplete="off">
                                <button class="btn" type="submit" aria-label="Đăng kí" name="subscribe">
                                    Đăng kí
                                </button>
                            </div>
                        </form>
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="mailchimp-error"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                @ Bản quyền thuộc về Ego Corp | Cung cấp bởi 
                 <a href="https://www.sapo.vn/?utm_campaign=cpn:kho_theme-plm:footer&amp;utm_source=Tu_nhien&amp;utm_medium=referral&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=kho_theme-sapo" rel="noopener" title="Sapo" target="_blank">Sapo</a> 
                </div>
        </div>
    </div>
</footer>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/layoutsite.js') }}"></script>
</body>
</html>