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
                        <h3>Kontak</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -6.8358803,
                            lng: 107.9238011
                        };
                        var grayStyles = [{
                                featureType: "all",
                                stylers: [{
                                        saturation: -90
                                    },
                                    {
                                        lightness: 50
                                    }
                                ]
                            },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#ccdee9'
                                }]
                            }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -6.8358803,
                                lng: 107.9238011
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                </script>

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Kirim Masukan</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                        placeholder="Messege"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Sumedang</h3>
                            <p>Kode Pos : 45311</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+62 877 6672 8897</h3>
                            <p>Senin - Minggu</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@aprian.my.id</h3>
                            <p>Kirim permintaan kalian!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

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