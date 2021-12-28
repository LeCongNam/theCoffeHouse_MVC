<?php


?>
<!doctype html>
<html lang="en">

<head>
    <title>HomePage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="//theme.hstatic.net/1000075078/1000803849/14/favicon.png?v=433" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="View/public/css/main.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header__meta-list">
                    <!-- Meta Item -->
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="meta-item__desc">146 Cửa hàng khắp cả nước</p>
                    </div>
                    <!-- End Meta Item -->

                    <!-- Meta Item -->
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <p class="meta-item__desc">Đặt hàng: 1800.6936 </p>
                    </div>
                    <!-- End Meta Item -->
                    <!-- Meta Item -->
                    <div class="meta-item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 w-svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="meta-item__desc">Freeship từ 50.000vnd</p>
                    </div>
                    <!-- End Meta Item -->
                </div>
            </div>
        </div>
    </div>

    <div id="menu">
        <a href="index.php">
            <img src="View/public/image/logo.png" alt="" class="logo">
        </a>
        <ul id="nav">
            <li><a href="#">Cà phê</a></li>
            <li><a href="#">Trà</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Chuyện Cà phê và Trà</a></li>
            <li><a href="#">Cửa Hàng</a></li>
            <li><a href="#">Tuyển dụng</a></li>
            <li><a href="#">Đăng nhập</a></li>
        </ul>
    </div>

    <div id="banner">
        <a href="#"><img src="View/public/image/banner.jpeg" alt="" class="banner__img"></a>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <a href="#"> <img src="View/public/image/products/sale1.jpeg" alt="" class="sale"></a>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <!-- show product -->
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="col-lg-6">
                            <div class="cart">
                                <a href="index.php?controller=home&action=details&id=<?php echo $products[$i]['product_id'] ?>">
                                    <img src="View/public/image/products/<?php echo $products[$i]['image'] ?>" alt="<?php echo $products[$i]['product_name'] ?>" class="cart__img">
                                </a>
                                <p class="cart__name"><a href="#"><?php echo $products[$i]['product_name'] ?></a></p>
                                <p class="cart__price"><?php echo $products[$i]['product_price'] ?>đ</p>
                            </div>
                        </div>
                    <?php endfor; ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <!-- show product 2-5 -->
            <?php for ($i = 2; $i < 6; $i++) : ?>
                <div class="col-lg-3">
                    <div class="cart">
                        <a href="index.php?controller=home&action=details&id=<?php echo $products[$i]['product_id'] ?>">
                            <img src="View/public/image/products/<?php echo $products[$i]['image'] ?>" alt="<?php echo $products[$i]['product_name'] ?>" class="cart__img">
                        </a>
                        <p class="cart__name">
                            <a href="index.php?controller=home&action=details&id=<?php echo $products[$i]['product_id'] ?>">
                                <?php echo $products[$i]['product_name'] ?>
                            </a>
                        </p>
                        <p class="cart__price"><?php echo $products[$i]['product_price'] ?>đ</p>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>

    <div class="combo">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="combo__left">
                        <h2 class="combo__left--heading">Combo Quà Tết 2022</h2>
                        <p class="combo__left--desc">
                            Combo quà Tết 2022: Hộp quà tặng với 4 hộp trà túi lọc Tearoma, Hộp cà phê sữa đá,
                            Hộp cà phê 3in1 đậm vị Việt và Cà phê Original 1 của The Coffee House với thành phần chính
                            cà phê Robusta Đắk Lắk,
                            vùng trồng cà phê nổi tiếng nhất Việt Nam. Bằng cách áp dụng kỹ thuật rang xay hiện đại.
                        </p>
                    </div>
                    <a href="#" class="btn-large">Tìm hiểu thêm</a>
                </div>
                <div class="col-lg-8">
                    <a href="#"><img src="View/public/image/combo/combo1.png" alt="" class="combo__img"></a>
                </div>
            </div>
        </div>
    </div>


    <!-- hobbies -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-lg-center">
                <h1>Chuyện Cà phê và Trà</h1>
            </div>
        </div>
        <div class="row">
            <div class="hobby">
                <div class="harizon mr-2"></div>
                <h3 class="hobby__heading">
                    Coffeeholic
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="cart">
                    <a href="#"><img src="View/public/image/hobby/hobby1.webp" alt="" class="cart__img"></a>
                    <p class="cart__name"><a href="#">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁCH</a></p>
                    <p class="cart__price">Espresso, một cái tên khá hay mà chắc hẳn bạn đã từng nghe qua. Vậy chính xác
                        Espresso là gì, nó có bao nhiêu loại và làm sao để phân...</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="cart">
                    <a href="#"><img src="View/public/image/hobby/hobby1.webp" alt="" class="cart__img"></a>
                    <p class="cart__name"><a href="#">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁCH</a></p>
                    <p class="cart__price">Espresso, một cái tên khá hay mà chắc hẳn bạn đã từng nghe qua. Vậy chính xác
                        Espresso là gì, nó có bao nhiêu loại và làm sao để phân...</p>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="cart">
                    <a href="#"><img src="View/public/image/hobby/hobby1.webp" alt="" class="cart__img"></a>
                    <p class="cart__name"><a href="#">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁCH</a></p>
                    <p class="cart__price">Espresso, một cái tên khá hay mà chắc hẳn bạn đã từng nghe qua. Vậy chính xác
                        Espresso là gì, nó có bao nhiêu loại và làm sao để phân...</p>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul>
                        <li><a href="#">
                                <h5>Giới thiệu</h5>
                            </a></li>
                        <li><a href="#">Về Chúng Tôi</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Chuyện cà phê</a></li>
                        <li><a href="#">Cửa Hàng</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <li><a href="#">Điều khoản</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                        <li><a href="#">Quy tắc bảo mật</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul>
                        <li><a href="">Đặt hàng: 1800 6936</a></li>
                        <li><a href="">
                                Liên hệ
                            </a></li>
                        <li><a href="">Tầng 3-4 Hub Building
                                195/10E Điện Biên Phủ, P.15 ,
                                Q.Bình Thạnh, TP.Hồ Chí Minh</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <img src="View/public/image/fb.jpg" alt="" class="footer_facebook" style="height: 200px; width: 100%;">
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>