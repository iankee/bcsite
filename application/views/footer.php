
        
        	<div id="footer-center" class="container">
            
            	<div class="footer-left">
                	
                    <ul class="footer-menu">

                   <?php    

$baseurl = base_url();
if (count($nav)){

foreach ($nav as $res){
echo "<li>";

echo "<a href=$baseurl$res[bc_menu_url]>$res[bc_menu_name]</a>";

echo "</li >";
}

} 

                   /* <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">News</a></li>
                        <li class="footer-last"><a href="#">A</a></li>
                        
                    */?>

                    </ul>
                    
                   
                     <?php $caddres = $this->Bc_model->get_bc_config("company_adress");?>
                    <?php $cphone = $this->Bc_model->get_bc_config("company_phone");?>
                    <?php $cmail = $this->Bc_model->get_bc_config("company_mail");?>
                    <ul class="footer-address">
                    	<li><img src="<?php echo base_url();?>assets/images/home-icon.png"/><?php echo $caddres->bc_config_desc ?> </li>
                        <li><img src="<?php echo base_url();?>assets/images/phone-icon.png"/><?php echo $cphone->bc_config_desc ?></li>
                        <li><img src="<?php echo base_url();?>assets/images/email-icon.png"/><?php echo $cmail->bc_config_desc ?></li>
               		</ul>
                
                </div>	
                
                
                <div class="footer-right" id="footer-newsletter">
                
                	
                    <p>Newsletter</p>
                    <form id="newsletter"  method="post">
                        <input type="text" onfocus="if(this.value == 'E-mail here') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail here'; }" value="E-mail here" class="newsletter">
                        <button type="submit">Submit</button>
                    </form>
                
                </div>
                
                
            
            </div>
            
            
            
            
            <div id="footer-bottom">
            
            	<div id="footer-center-bottom" class="container">
            
            	<!-- Copyright -->
                <ul class="copyright">
                    <li>2012 © Creative Media. All rights reserved</li>
                </ul>
                <!-- /Copyright -->
    
                <!-- Social Links -->
                <ul class="social-links">                   
                    <li class="facebook"><a href="#">Facebook</a></li>
                    <li class="twitter"><a href="#">Twitter</a></li>
                    <li class="vimeo"><a href="#">Vimeo</a></li>
                    <li class="linkedin"><a href="#">LinkedIn</a></li>
                </ul>
                <!-- /Social Links -->
                
                </div>
            
            </div>