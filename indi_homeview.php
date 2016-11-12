<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php 
		$curr_url=trim(uri_string()); 
		$paginate_url=explode("/",$curr_url);
		if(count($paginate_url)>1) {
			$seo_title=$seo->meta_title. " | Page - ".$paginate_url[1];
			$seo_meta_des=$seo->meta_des. " | Page - ".$paginate_url[1];
			$seo_meta_keywords=$seo->meta_keywords." | Page - ".$paginate_url[1];
		}else {
			$seo_title=$seo->meta_title;
			$seo_meta_des=$seo->meta_des;
			$seo_meta_keywords=$seo->meta_keywords;
		}
		?>
        <title><?=$seo_title; ?></title>
		<meta name="keywords" content="<?=$seo_meta_keywords ;?>" />
		<meta name="description" content="<?=$seo_meta_des;?>" />
        <!-- Bootstrap -->
        <link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?=base_url(); ?>assets/css/datepicker3.css" rel="stylesheet" />
        <link href="<?=base_url(); ?>assets/css/custom.css" rel="stylesheet" />
		<link href="<?=base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
        <link href="<?=base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 12]>
        <script>
        alert("Please use modern browsers such as chrome or firefox to avoid errors");
        </script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/slick.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/slick-theme.css" />
        <link rel="shortcut icon" href="<?=base_url(); ?>assets/images/favicon.ico" />
	</head>
<body>
<div class="container-fluid" style="height:140px;">
    <div class="row" >
		<div class="col-md-6 col-sm-6 col-xs-12">	
			<a href="<?=base_url(); ?>" class="logo"><img src="<?=base_url(); ?>assets/images/logo.png" alt="indi logo"></a>
			<h1 class="text-center " style="color:#de3027;margin-top:6%;"><?=$seo->h1_title;?></h1>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">	
			<a href="<?=base_url(); ?>" class="btn new_order_btn ">ENTER WEBSITE</a>
			<a href="<?=base_url(); ?>order-now" class="btn new_order_btn  ">ORDER ONLINE</a>
		</div>	
    </div>
</div>
<div id="indi_home" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#indi_home" data-slide-to="0" class="active"></li>
        <li data-target="#indi_home" data-slide-to="1"></li>
        <li data-target="#indi_home" data-slide-to="2"></li>
        <li data-target="#indi_home" data-slide-to="3"></li>
        <li data-target="#indi_home" data-slide-to="4"></li>
        <li data-target="#indi_home" data-slide-to="5"></li>
        <li data-target="#indi_home" data-slide-to="6"></li>
    </ol>   
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
			<img src="<?=base_url(); ?>assets/images/new_images/slider_1.jpg" alt="Sliders_spicybros image" /> 
		</div>
        <div class="item">
			<img src="<?=base_url(); ?>assets/images/new_images/Sliders_values.jpg" alt="Sliders_values image" /> 
		</div>
        <div class="item">
        	<img src="<?=base_url(); ?>assets/images/new_images/Slider_2.jpg" alt="Sliders_2 image" />
		</div> 
		<div class="item">
            <img src="<?=base_url(); ?>assets/images/new_images/Sliders_hertybowl.jpg" alt="Sliders_hertybowl image" />
        </div> 
		<div class="item">
            <img src="<?=base_url(); ?>assets/images/new_images/Sliders_porotilla.jpg" alt="Sliders_porotilla image" />
        </div>
		<div class="item">
            <img src="<?=base_url(); ?>assets/images/new_images/banner_latest1.jpg" alt="Indiblaze pizza image" />
        </div>
		<div class="item">
            <img src="<?=base_url(); ?>assets/images/new_images/indi_banner.jpg" alt="Indiblaze restaurant image" />
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#indi_home" role="button" data-slide="prev"> 
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#indi_home" role="button" data-slide="next"> 
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
<?php $this->load->view('includes/scripts_view'); ?>
</body>
</html>