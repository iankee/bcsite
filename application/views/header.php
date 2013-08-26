
                    
        <a href="<?php echo base_url();?>" id="logo"><img src="<?php echo base_url();?>assets/images/logo.png" alt="" /></a>
        
          
        <!-- Navigation -->
        <ul id="navigation">
            
            <?php
            $baseurl = base_url();

            if (count($nav))
            {

                foreach ($nav as $res)
                {
                    echo "<li>";
                    echo "<a href=$baseurl$res[bc_menu_url]>$res[bc_menu_name]</a>";
                    $submenu = $this->Bc_model->get_bc_menu($res['bc_menu_id']);
                    if(count($submenu))
                    {
	                   echo"<ul>";
	                   foreach ($submenu as $res2) 
                        {
		                  echo "<li>";
                          if($res2["bc_content_id"]!=0){
                            echo "<a href=".$baseurl."content/$res2[bc_content_id]>$res2[bc_menu_name]</a>";
                            }
                            else{
                                echo "<a href=$baseurl$res2[bc_menu_url]>$res2[bc_menu_name]</a>";
                            }
                            echo"</li>";
	                   }
	                   echo "</ul>";
                    }
                    echo "</li >";
                }

            }  

            ?></ul>

        <!-- /Navigation -->   