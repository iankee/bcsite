 <!-- Page title -->
        <nav id="page-title" >
        
        	<h1>Contact us</h1>
        
        </nav>
        <!-- /Page title -->
        
         
        
    </div>
    <!-- /Content -->        

    
        
</div>
<!-- /Main Container -->  




      
	<!-- Contact Container --> 
	<div id="contact-map">
    	
        <!-- Contact Info -->
    	<div id="contact-info">
        
        
        	<div class="one-fourth">
            
            	<div id="contact-details">
            	
                    <h5>Contact details</h5>
                    
                    <?php $cphone = $this->Bc_model->get_bc_config("company_phone");?>
                    <?php $cmail = $this->Bc_model->get_bc_config("company_mail");?>
                    <p> 
                        <?php echo $caddres->bc_config_desc; ?><br><br>
                        
                        Phone:  <?php echo $cphone->bc_config_desc; ?><br>
                        Fax:  -<br>
                        Email:  <?php echo $cmail->bc_config_desc; ?><br>
                        Web: <?php echo base_url(); ?>
                    </p>
                
                </div>
            
            </div>
        
        	
            
            	<div class="three-fourth last">
                
                	<!-- Comments Form -->
            		<div id="contact-form">
            		
                    
                        <h5>Send us a message</h5>
        				
                        <div id="message"></div>
                        <form method="post" action="http://clapat.ro/themes/creative/contact.php" name="contactform" id="contactform">
                        	
                            <input name="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" >
                            <input name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" >
                            <input name="phone" type="text" id="phone" size="30" onfocus="if(this.value == 'Phone') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Phone'; }" value="Phone" class="last" >
                            <textarea name="comments" cols="40" rows="3" id="comments" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" value="Message">Message</textarea>
                            
                            <input type="submit" class="btn-image" id="submit" value="Submit" />
                            
                        </form>
                
                	</div>
                	 <!-- /Comments Form -->
            </div>
               
        
        </div>		
		<!-- /Contact Info -->
        
        
        <!-- Google Map -->
        <iframe width="100%" height="800" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $gmap->bc_config_desc; ?>"></iframe>
        <!-- /Google Map -->
        