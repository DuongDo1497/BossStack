<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name')); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="route" content="<?php echo e(request()->route()->getName()); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/style_fund.css')); ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php echo $__env->yieldContent('head'); ?>

</head>

<body>
    
    <div id="header-fund">

        <!-- Menu -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-fund">
                            <a href="https://dongtiencanhan.com/public/"><img src="<?php echo e(asset('img/lam-w.png')); ?>"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="menu-fund">
                            <ul>
                                <li><a href="#">V??? ch??ng t??i</a></li>
                                <li><a href="#">S???n ph???m</a></li>
                                <li><a href="#">D???ch v??? h??? tr???</a></li>
                                <li><a href="#">Tuy???n d???ng</a></li>
                                <li><a href="#">Li??n h???</a></li>
                                <li class="sign-in"><a href="<?php echo e(route('login')); ?>">????ng nh???p</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Menu -->

        <!-- Banner -->
        <div class="banner-home-fund">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="banner-home-fund-left">
                            <div class="align-self-center">
                                <h1>D??NG TI???N C?? NH??N</h1>
                                <p>Ki???m so??t ?????i s???ng t??i ch??nh v?? gia t??ng thu nh???p ngay t??? l??c n??y!</p>
                                <div class="button-banner">
                                    <a class="btn btn-primary btn-banner" href="#">Gi???i thi???u</a>
                                    <a class="btn btn-primary btn-banner" href="#">T???i xu???ng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="<?php echo e(asset('img/home-banner-right.png')); ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

    </div>

    <div id="main-fund">

        <!-- V??? LAMs -->
        <section class="element-section element-bg-1 element-about-lams">
            <div class="container">

                <div class="about-lams-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-1 clearfix">
                                <div class="box-left align-self-center">
                                    <img src="<?php echo e(asset('img/icon-1.png')); ?>">
                                </div>
                                <div class="box-right align-self-center">
                                    <h3>???NG D???NG</h3>
                                    <h1>QU???N L?? D??NG TI???N C?? NH??N</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-2 clearfix">
                                <div class="box-left align-self-center">
                                    <img src="<?php echo e(asset('img/icon-2.png')); ?>">
                                </div>
                                <div class="box-right align-self-center">
                                    <h3>???NG D???NG</h3>
                                    <h1>?????U T??</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-3 clearfix">
                                <div class="box-left align-self-center">
                                    <img src="<?php echo e(asset('img/icon-3.png')); ?>">
                                </div>
                                <div class="box-right align-self-center">
                                    <h3>???NG D???NG</h3>
                                    <h1>TI???T KI???M</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-lams-2">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <h1>V??? LAMs</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><br>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo e(asset('img/about-lams.jpg')); ?>" width="100%">
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End V??? LAMs -->

        <!-- T???I SAO B???N N??N CH???N CH??NG T??I? -->
        <section class="element-section element-why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo e(asset('img/why-choose-us.png')); ?>" width="100%">
                    </div>
                    <div class="col-md-6">
                        <div class="why-choose-us-right">
                            <h1>T???I SAO B???N N??N <br>CH???N CH??NG T??I?</h1>
                            <ul>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png')); ?>"></span>
                                    <span class="text align-self-center">R???i ro v???n c???a kh??ch h??ng l?? 0.</span>
                                </li>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png')); ?>"></span>
                                    <span class="text align-self-center">100% minh b???ch t??i ch??nh.</span>
                                </li>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png')); ?>"></span>
                                    <span class="text align-self-center">C??c g??i ?????u t?? ph?? h???p v???i nhi???u m???c ti??u t??i ch??nh v?? m???c ch???u r???i ro.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End T???I SAO B???N N??N CH???N CH??NG T??I? -->

        <!-- ??u ??i???m c???a h??? th???ng -->
        <section class="element-section element-bg-1 element-advantages">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-5.png')); ?>"></span>
                                <span class="text align-self-center">Giao di???n b???t m???t v?? th??n thi???n v???i ng?????i d??ng.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-6.png')); ?>"></span>
                                <span class="text align-self-center">H??? th???ng th??ng b??o gi??p b???n kh??ng ph???i lo v??? c??c kho???n thu ph?? ?????nh k???.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-7.png')); ?>"></span>
                                <span class="text align-self-center">Bi???u ????? chi ti???t h??? tr??? b???n theo d??i cu???c s???ng t??i ch??nh c???a m??nh.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-8.png')); ?>"></span>
                                <span class="text align-self-center">Thi???t l???p k??? ho???ch t??i ch??nh t????ng lai v???i ph??n t??ch chi ti???t.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-9.png')); ?>"></span>
                                <span class="text align-self-center">D???ch v??? t?? v???n, h??? tr??? c???i thi???n d??ng ti???n c?? nh??n.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-advantages">
                            <img src="<?php echo e(asset('img/advantages-system.png')); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ??u ??i???m c???a h??? th???ng -->

        <!-- B???ng gi?? ph???n m???m -->
        <section class="element-section element-price-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-price-list">
                            <div class="card-header">
                                <p class="name">Basic Plan</p>
                                <p class="percent"><span>5.50%</span><br>Per Month</p>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><b>Features</b></li>
                                    <li>Minimum Deposit $10</li>
                                    <li>Miximum Deposit $10.000</li>
                                    <li>Enhansed security</li>
                                    <li>Access to all features</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-price-list">
                            <div class="card-header">
                                <p class="name">Basic Plan</p>
                                <p class="percent"><span>5.50%</span><br>Per Month</p>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><b>Features</b></li>
                                    <li>Minimum Deposit $10</li>
                                    <li>Miximum Deposit $10.000</li>
                                    <li>Enhansed security</li>
                                    <li>Access to all features</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-price-list">
                            <div class="card-header">
                                <p class="name">Basic Plan</p>
                                <p class="percent"><span>5.50%</span><br>Per Month</p>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><b>Features</b></li>
                                    <li>Minimum Deposit $10</li>
                                    <li>Miximum Deposit $10.000</li>
                                    <li>Enhansed security</li>
                                    <li>Access to all features</li>
                                    <li>24/7 Support</li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End B???ng gi?? ph???n m???m -->

        <!-- Li??n h??? -->
        <section class="element-section element-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="contact">
                            <h1>B???N C???N H??? TR????</h1>
                            <p>H??y li??n h??? v???i ch??ng t??i ????? nh???n ???????c t?? v???n s??? d???ng d???ch v??? v?? gia t??ng d??ng ti???n c?? nh??n.</p>
                            <a href="#" class="btn btn-primary btn-contact">Li??n h???</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Li??n h??? -->

    </div>

    <div id="footer-fund">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo-fund">
                            <a href="http://103.101.162.242/public/funds/public/"><img src="<?php echo e(asset('img/lam-w.png')); ?>"></a>
                        </div>
                        <p><b>Copyright @ 2015 by LAMIANS</b></p>
                    </div>
                    <div class="col-md-3">
                        <div class="menu-footer">
                            <h4>About Us</h4>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Android App</a></li>
                                <li><a href="#">Ios App</a></li>
                                <li><a href="#">Desktop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="menu-footer">
                            <h4>Help?</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Term & conditions</a></li>
                                <li><a href="#">Reporting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="follow-social">
                            <h4>Follow Us</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a></li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>

    <script src="<?php echo e(asset('js/commons.js')); ?>"></script>

    

    <script src="<?php echo e(asset('js/libs/bootstrap3-typeahead.min.js')); ?>"></script>      
    <script src="<?php echo e(asset('js/libs/bootstrap-multiselect.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('js/libs/bootstrap-multiselect.css')); ?>" />

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>