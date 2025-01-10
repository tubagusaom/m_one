<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">

	<title>
		<?= $aplikasi->nama_unit ?>
	</title>


	<meta name="keywords" content="TV , TV ONLINE , roadcast" />
	<meta name="description" content="Mitra One TV - TV Online">
	<meta name="author" content="terabytee.my.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png">
	<link rel="icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon">

	<!-- Mobile Metas -->
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<!-- Web Fonts  -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700%7COpen+Sans:400,600,700%7CSource+Code+Pro:300,400,500,600,700,900%7CNothing+You+Could+Do%7CPoppins:400,500">

	<!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_tv/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_tv/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_tv/css/style.v05.css">

    <!-- <style>
		.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
	</style> -->

    <link href="<?php echo base_url() ?>assets_tv/css/video.js.v01.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets_tv/css/terabytee.v04.css" rel="stylesheet" />
    <!-- <script defer src="<?php echo base_url() ?>assets_tv/js/video.min.js"></script> -->

    <!-- <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet" /> -->

    <style>
        .terabytee { /* my name is terabytee */ }

        .li-svg {
            width: 25px;
            margin-left: 15px;
            padding: 0;
        }

        .image-hover {
            width: 16px;
            height: 19px;
            margin: 2px;
            background-image: url('<?=base_url()?>assets_tv/images/tv/icon/tiktok_white.png');
            background-size: cover;
            /* transition: background-image 0.5s ease-in-out; */
        }

        .image-hover:hover {
            background-image: url('<?=base_url()?>assets_tv/images/tv/icon/tiktok_circle.png');
            width: 24px;
            height: 24px;
            margin: 0;
        }

        @media (prefers-color-scheme: dark) {
            #dark_logo { display: block!important; }
            #light_logo { display: none!important; }
        }

        @media (prefers-color-scheme: light) {
            #dark_logo { display: none!important; }
            #light_logo { display: block!important; }
        }
    </style>

</head>


<body>

<div class="preloader">
	<div class="preloader-body">
		<div class="cssload-container">
			<div class="cssload-speeding-wheel"></div>
        </div>
    </div>
</div>

<div class="page">

	<!-- Page Header-->
	<header class="section page-header">
		<!--RD Navbar-->
        <div class="rd-navbar-wrap" style="position: absolute">
			<nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-main-outer">
				<div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
					<!--RD Navbar Toggle-->
					<button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    
                    

					<!--RD Navbar Brand-->
					<div class="rd-navbar-brand">
                    <!--Brand-->
                        <a class="brand" href="<?=base_url()?>">
                            <img id="dark_logo" class="img_logo" src="<?= base_url() ?>assets_tv/images/logo_mitraone_white_1.png" alt="" width="174" height="13"/>
                            <img id="light_logo" class="img_logo" src="<?= base_url() ?>assets_tv/images/logo_mitraone_font_1.png" alt="" width="174" height="13"/>
                            <!-- MitraOne TV 296x52 -->
                        </a>
                    </div>
                </div>
                <div class="rd-navbar-main-element">
					<div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                        <li class="rd-nav-item <?= $this->uri->segment(1) == '' ? 'active' : '' ?>">
                            <a class="rd-nav-link" href="<?=base_url()?>"><i class="icon fa-home"></i> HOME</a>
                        </li>
                        <!-- <li class="rd-nav-item">
                            <a class="rd-nav-link" href="about.html">About</a>
                            <a class="rd-nav-link" href="javascript:void(0)">About</a>
                        </li>
                        <li class="rd-nav-item">
                            <a class="rd-nav-link" href="typography.html">Typography</a>
                            <a class="rd-nav-link" href="javascript:void(0)">Promo</a>
                        </li> -->
                        <li class="rd-nav-item <?= $this->uri->segment(1) == 'vod' ? 'active' : '' ?>">
                            <a class="rd-nav-link" href="<?=base_url('vod')?>"><i class="icon fa-play-circle"></i> VOD</a>
                        </li>
                        <li class="rd-nav-item">
                            <a class="rd-nav-link" href="https://play.google.com/store/apps/" target="_blank"><i class="icon fa-android"></i> APP</a>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="rd-navbar-collapse">
                <ul class="socialite-list">
                    <li><a class="icon novi-icon socialite fa-facebook" href="https://www.facebook.com/mitraonetv" target="_blank"></a></li>
                    <li><a class="icon novi-icon socialite fa-instagram" href="https://www.instagram.com/mitraonetv_official/" target="_blank"></a></li>

                    <li class="li-svg">
                        <a href="https://www.tiktok.com/@mitraonetv" target="_blank">
                            <!-- <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                            </svg> -->
                            <!-- <img class="tiktok-white" src="<?=base_url()?>assets_tv/images/tv/icon/tiktok_white.png" alt="">
                            <img class="tiktok-hover" src="<?=base_url()?>assets_tv/images/tv/icon/tiktok_hover.png" alt=""> -->

                            <div class="image-hover"></div>
                        </a>
                    </li>

                    <li><a class="icon novi-icon socialite fa-youtube" href="https://www.youtube.com/@MitraoneTV" target="_blank"></a></li>
                </ul>
                </div>
            </div>

            </div>
        </nav>

        

        </div>
    </header>

	