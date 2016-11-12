<div class="row">
	<div class="menu_page">
      <div class="container-fluid" style="background:#44322c;" >
         <div class="container" >
            <div class="row ">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <img class="img-responsive" src="<?=base_url();?>assets/images/new_images/select_1.png" alt="Select any dish"/>
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="container" style="background:#fff;">
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <h1 class="text-center" style="color:#de3027"><?=$seo->h1_title;?></h1>
               <br>
            </div>
         </div>
         <div class="row">
            <!--row 1  start-->
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/heartybowl_menu.jpg" alt="HEARTY BOWL"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/edibowl_menu.jpg" alt="EDIBOWL"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/porotilla_menu.jpg" alt="POROTIILLA"/>
            </div>
            <br/>
         </div>
         <!--row 1  close-->
         <br>
         <div class="row" id="desktop_menu_toppings">
            <!--row 2  start-->
            <div class="col-md-12 col-sm-12 col-xs-12">
               <img class="img-responsive new_img" src="<?=base_url(); ?>assets/images/new_images/toppinges_menu.jpg"  alt="toppinges image" /> 
            </div>
            <br/>
         </div>
         <!--row 2  close-->
         <br>
         <div class="row" id="mobile_menu_toppings" style="display: none;">
            <!--row 2  start-->
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">
               <img class="img-responsive new_img" src="<?=base_url(); ?>assets/images/new_images/cold_menu.jpg"  alt="cold_menu image" /> 
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">
               <img class="img-responsive new_img" src="<?=base_url(); ?>assets/images/new_images/hot_menu.jpg"  alt="hot_menu image"/> 
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">
               <img class="img-responsive new_img" src="<?=base_url(); ?>assets/images/new_images/sauces_menu.jpg"  alt="sauces_menu image" /> 
            </div>
            <br/>
         </div>
         <!--row 2  close-->
         <br/>
         <div class="row">
            <!--row 3 start-->
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">	
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/indipizza_menu.jpg" alt="INDIPIZZA"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">	
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/hot-kebaba-wrap_menu.jpg" alt="HOT KEBAB WRAP"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">	
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/mini-bowl_menu.jpg" alt="MINI BOWL"/>	
            </div>
         </div>
         <!--row 3  close-->
         <br>
         <div class="row">
            <!--row 4  start-->
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">	
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/blazing_toast_menu.jpg" alt="BLAZING TOAST"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">	
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/beverage_menu.jpg" alt="BEVERAGE"/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin:1% 0%;">	
               <img class="img-responsive new_img" src="<?=base_url();?>assets/images/new_images/desserts_menu.jpg" alt="DESSERTS"/>
            </div>
            <br/>
         </div>
         <!--row 4 close-->
         <br/>
      </div>
      <!--container close-->	
   </div>
</div>
<?php $this->load->view('includes/footer_view'); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?=base_url(); ?>assets/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url(); ?>assets/js/jquery_validator/jquery.validate.js"></script> 
<?php $this->load->view('includes/scripts_view'); ?>
</body>
</html>