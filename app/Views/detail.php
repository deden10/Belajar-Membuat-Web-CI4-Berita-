<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prian D News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/nice-select.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/flaticon.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/gijgo.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/animate.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/slicknav.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css')?>">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="<?= base_url('img/logo55.png')?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="<?= base_url('/')?>">Beranda</a></li>
                                                <li><a href="<?= base_url('blog')?>">Blog</a></li>
                                                <li><a href="<?= base_url('contact')?>">Kontak Kami</a></li>
                                                <li><a href="<?= base_url('auth')?>">Login</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Detail Blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="<?= base_url('uploads/' . $post['image'])?>" alt="">
                        </div>
                        <div class="blog_details">
                            <h2><?= $post['title'] ?>
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i><?= $post['category_name']?></a></li>
                                <li><a href="#"><i class="flaticon-calendar-1"></i><?= $post['date']?></a></li>
                            </ul>
                            <p class="excert">
                                <?= $post['content']?>
                            </p>
                            
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Prian</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying
                                    you're, he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="<?= base_url('post/search')?>" method="post">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'" name="search">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                            <?php foreach($kategori as $k) {?>
                                <li>
                                    <a href="<?= base_url('post/kategori/'. $k['category_id'])?>" class="d-flex">
                                        <p><?= $k['category_name']?></p>
                                    </a>
                                </li>
                            <?php }?>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Riwayat Post</h3>
                            <?php foreach($riwayat as $all) {?>
                            <div class="media post_item">
                                <img width = "50px" src="<?= base_url('uploads/' . $all['image'])?>" alt="">
                                <div class="media-body">
                                    <a href="<?= base_url('post/blog/'. $all['post_id'])?>">
                                        <h3><?= $all['title']?></h3>
                                    </a>
                                    <p><?= $all['date']?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-7">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Pencarian Berita
                                </h3>
                                <form action="<?= base_url('post/search')?>" class="newsletter_form">
                                    <input type="text" name="search" placeholder="Judul Berita">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Stay Updated
                                </h3>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Tentang Kami
                            </h3>
                            <ul>
                                <li><a href="#">Politik</a></li>
                                <li><a href="#">Sosial</a></li>
                                <li><a href="#">Teknologi</a></li>
                                <li><a href="#">Ekonomi</a></li>
                                <li><a href="#">Bencana</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Berita
                            </h3>
                            <ul>
                                <li><a href="#">Fakta</a></li>
                                <li><a href="#">Menarik</a></li>
                                <li><a href="#">Terpecaya</a></li>
                                <li><a href="#">Terbaru</a></li>
                                <li><a href="#">Ulasan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Website
                            </h3>
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Kontak Kami</a></li>
                                <li><a href="">Login</a></li>
                                <li><a href="">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Support
                            </h3>
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">System Requirements</a></li>
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#">Site feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->
  

    <!-- JS here -->
    <script src="<?= base_url('js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <script src="<?= base_url('js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?= base_url('js/popper.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('js/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('js/isotope.pkgd.min.js')?>"></script>
    <script src="<?= base_url('js/ajax-form.js')?>"></script>
    <script src="<?= base_url('js/waypoints.min.js')?>"></script>
    <script src="<?= base_url('js/jquery.counterup.min.js')?>"></script>
    <script src="<?= base_url('js/imagesloaded.pkgd.min.js')?>"></script>
    <script src="<?= base_url('js/scrollIt.js')?>"></script>
    <script src="<?= base_url('js/jquery.scrollUp.min.js')?>"></script>
    <script src="<?= base_url('js/wow.min.js')?>"></script>
    <script src="<?= base_url('js/nice-select.min.js')?>"></script>
    <script src="<?= base_url('js/jquery.slicknav.min.js')?>"></script>
    <script src="<?= base_url('js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?= base_url('js/plugins.js')?>"></script>
    <script src="<?= base_url('js/gijgo.min.js')?>"></script>

    <!--contact js-->
    <script src="<?= base_url('js/contact.js')?>"></script>
    <script src="<?= base_url('js/jquery.ajaxchimp.min.js')?>"></script>
    <script src="<?= base_url('js/jquery.form.js')?>"></script>
    <script src="<?= base_url('js/jquery.validate.min.js')?>"></script>
    <script src="<?= base_url('js/mail-script.js')?>"></script>

    <script src="<?= base_url('js/main.js')?>"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    </script>
</body>

</html>