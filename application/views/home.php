<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <title><?php echo $title ?></title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css">
    
    
    <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    
    
    <!-- Back to top -->
   <script>
    $(document).ready(function(){
 

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
    
            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    
    });
    </script>
    <!-- /Back to top -->
    
    
    
    <!-- Responsive Navigation -->
    <script src="<?php echo base_url();?>assets/js/selectnav.min.js"></script>
    <!-- /Responsive Navigation -->
       <script src="<?php echo base_url();?>assets/js/jquery.quicksand.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <!-- /Portfolio filter --> 
    
    
    
    <!-- FlexSlider -->    
    <script src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>

	<script type="text/javascript">
            $(function(){
              SyntaxHighlighter.all();
            });
            $(window).load(function(){
              $('.flexslider').flexslider({
                animation: "fade",
                start: function(slider){
                  $('body').removeClass('loading');
                }
              });
            });
	</script>
    <!-- /FlexSlider -->
  
  
 
	
    
    
    

	
    
    
    
    
    
</head>

<body>



<!-- Header Background -->
<div id="header-bg">
 
</div>
<!-- / Header Background -->
<?php echo $subheader; ?>



	


<!-- Main Container -->
<div id="body-wrapper">





	<!-- Header -->
    <div id="header" >
        <?php $this->load->view('header');?>    
    </div>
    <!-- /Header -->
    
    
    
    <!-- Content -->
    <div id="content" class="container clearfix">
    
    
    
            <!-- Back to top -->
            <p id="back-top" style="display: block;">
                <a href="#top"><span></span></a>
            </p>
            <!-- /Back to top -->    
    
    
    <?php $this->load->view($main); ?>
    
    
    
    	<!-- Slider -->
    	
        
        
        	
        
        
        
        
        
        
        
        
        
        
        
    
    </div>
    <!-- /Content -->

		
        

    
        
        
</div>
<!-- /Main Container -->        


<!-- Footer -->
        <div id="footer">
            
            <?php $this->load->view('footer'); ?>
            
            
        
        </div>
        <!-- /Footer -->



</body>
</html>
