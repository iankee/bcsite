<nav id="filter"></nav>
        
        
        
        
        
        
        
        <!-- Projects 3 columns -->
        <div id="projects3" >
        
        	
			<ul id="stage">
            	
               <?php
               $base = base_url();
               if(count($content))
                    {
                       
                       foreach ($content as $arr) 
                        {
                           echo "<li data-tags='".$arr['content_tag']."'' >
                    <a href=".$base."portfolio/$arr[bc_content_id] >
                        <div class='view overlay'>
                            <img src=".$base."assets/upload/image/$arr[bc_content_icon] />
                            <div class=mask>
                                <h3>$arr[bc_content_tittle]</h3>
                                <p>

                                Web Design, Branding<br><b>2012</b></p>
                                <div class=info>Read More</div>
                            </div>
                        </div>
                    </a>
                </li>";
                       }
                       
                    }
               ?>
           </ul>

                
                
                
                
                
                
                
                
              
                 
            
        
            
        
        </div>
        <!-- /Projects 3 columns -->
        
        
        
        