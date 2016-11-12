<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>   
	<!--pop up box started-->
	<div id="myModal" class="modal " role="dialog">
		<button type="button"  id="show_add" style="display:none;" class="btn btn-info btn-lg" data-backdrop="static" data-toggle="modal" data-target="#myModal">Open Modal</button>
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<!--<div class="modal-content popbox1" >-->
			<div class="modal-content " >
				<button id="close_add" type="button" class="close close_pop" data-dismiss="modal">&times;</button>
					<div id="video">
						<!--<video width="900" height="500" preload controls autoplay loop>-->
						<!--<video id="video1" width="900" height="500" preload controls autoplay >
							<source src="</?=base_url(); ?>assets/videos/teaser.mp4" />
						</video>-->
						<!--<img class="img-responsive" src="</?=base_url(); ?>assets/images/flexi.jpg" alt="indi blaze image" />-->				
					</div>
			</div>
		</div>
	</div>
	<!--pop up box closed-->
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
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> 
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<br>
			<h1 class="text-center" style="color:#de3027"><?=$seo->h1_title;?></h1>
		</div>
	</div>
    <div class="topMargin_50 pull-left fullWidth">
        <!--<div class="row">
            <h1 style="color:#fff;font-size:2px;"></?=$seo->h1_title;?></h1><h2 class="text-center">WHAT’S UP</h2>
            <div class="your_class">
                </?php 
                foreach($whats_happening as $happenings) { ?>
                    <div class="col-xs-4">
                        <div>
                            <a href="</?=base_url()."happenings/".$happenings->slug; ?>">-->
                                <!--<img src="</?=base_url(); ?>assets/img/thumbs/360x360-</?=$happenings->imagepath; ?>" alt="</?=$happenings->whats_happening_title; ?>" />
                                <span class="foot"></?=$happenings->whats_happening_title; ?></span>-->
                           <!-- </a>
                        </div>
                    </div>
                </?php } ?>
            </div>
        </div>-->
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 ">
				<div class="col-md-12 col-sm-12 col-xs-12 ">
					<img class="img-responsive home_img1" src="<?=base_url(); ?>assets/images/new_images/indiblaze1.jpg" alt="indiblaze image1">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 " >
					<p>Enjoy the pleasant ambience and quick service of IndiBlaze while treating your taste buds to a meal that is healthy, tasty, custom-made and affordable. IndiBlaze is essentially a blend of quick service and sit-in dining with live and interactive counters where diners can prepare their own meal.</p>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12 " >
				<div class="col-md-12 col-sm-12 col-xs-12 " >
					<div class="col-md-6 col-sm-6 col-xs-6 " style="padding:0px;">
						<a href="https://www.swiggy.com/hyderabad/indiblaze-hitech-city-madhapur" target="_blank" >
						<img class="img-responsive" src="<?=base_url(); ?>assets/images/new_images/swiggy.jpg" alt="swiggy image1">
						</a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6" style="padding:0px;">
						<a href="https://www.foodpanda.in/restaurant/s3ts/indi-blaze" target="_blank" >
							<img class="img-responsive" src="<?=base_url(); ?>assets/images/new_images/foodpanda.jpg" alt="foodpanda image1">
						</a>	
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 " >
					<p>We will be more than happy to host you but in case you can’t make it to our restaurant, you can also enjoy a tasty, healthy, custom-made and affordable meal at home by placing an order through Swiggy or Foodpanda.</p>
				</div>
			</div>
		</div>	
    </div>
</div>
<?php $this->load->view('includes/footer_view'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
<?php $this->load->view('includes/scripts_view'); ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/slick.min.js"></script>
<script type="text/javascript">
	var myVid=document.getElementById("video1");
	var new_cur_time=0;
	function myTimer()
	  {
		 var cur_time=Math.round(myVid.currentTime);
		 new_cur_time=cur_time;
		 //console.log("timer "+cur_time);
		if(cur_time== 21)
		{
			//alert(123);
			//myVid.pause();
			$("#close_add").trigger("click");
			//window.clearInterval(timer);
		}
		
	  }
	  
    $(document).ready(function() {
        /* $("#show_add").trigger("click");		
		var timer= setInterval(function(){
			myTimer();
			console.log("new timer"+new_cur_time);
			if(new_cur_time>=21) {
				clearInterval(timer); 
			}
		},1000);
		// setInterval(function() {
			// $("#close_add").trigger("click");
		// }, 5000);
		$("#close_add").click(function() {
           $("video")[0].pause();
        }); */
		$('.your_class').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
</script>
</body>
</html>