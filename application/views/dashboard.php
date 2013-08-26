<body class="dashborad">        
        <div id="alertMessage" class="error"></div> 
                       
        <div id="header" >
                <div id="account_info"> 
                    
          <div class="setting" title="Profile Setting"><b>Welcome,</b> <b class="red">John Doe</b><img src="<?php echo base_url();?>assets/images/gear.png" class="gear"  alt="Profile Setting" ></div>
          <div class="logout" title="Disconnect"><b >Logout</b> </div> 
                </div>
            </div> <!--//  header -->
      <div id="shadowhead"></div>
                 
                   
        <div id="left_menu">
                    <ul id="main_menu" class="main_menu">
                      <li class="limenu select" ><a href="<?php echo base_url();?>administrator/dashboard"><span class="ico gray shadow home" ></span><b>Dashboard</b></a></li>
                      <li class="limenu" ><a href="#" ><span class="ico gray shadow window"></span><b>Pages</b></a>
                
                      </li>
                      <li class="limenu" ><a href="#"><span class="ico gray  dimensions" ></span><b>Blog</b></a>
                   
                      </li>
                      <li class="limenu" ><a href="table.html"><span class="ico gray shadow  spreadsheet"></span><b>Portfolio</b> </a></li>
                      <li class="limenu" ><a href="gallery.html"><span class="ico gray shadow pictures_folder"></span><b>Gallery </b></a></li>
                      <li class="limenu" ><a href="#"><span class="ico gray shadow stats_lines"></span><b>Contact</b> </a>
                    
                      </li>
                      <li class="limenu" ><a href="filemanager.html"><span class="ico gray shadow  file"></span><b>Pengaturan </b></a></li>
   
                        
                    </ul>
              </div>
          
            
            <div id="content">
                <div class="inner">
          <div class="topcolumn">
            <div class="logo"></div>
                            <ul  id="shortcut">
                                <li> <a href="#" title="Back To home"> <img src="<?php echo base_url();?>assets/images/icon/shortcut/home.png" alt="home"/><strong>Home</strong> </a> </li>
                                <li> <a href="#" title="Setting" > <img src="<?php echo base_url();?>assets/images/icon/shortcut/setting.png" alt="setting" /><strong>Setting</strong></a> </li> 
                                <li> <a href="#" title="Messages"> <img src="<?php echo base_url();?>assets/images/icon/shortcut/mail.png" alt="messages" /><strong>Message</strong></a><div class="notification" >10</div></li>
                            </ul>
          </div>
                    <div class="clear"></div>
                    
                    
                    <!-- // End onecolumn -->
                    
                    <?php $this->load->view($sub_main); ?>

                    
                    <div class="clear"></div>
                    <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Zice Admin" >Your Company Name</a> </span> </div>
                </div> <!--// End inner -->
            </div> <!--// End content --> 
            <script type="text/javascript" src="<?php echo base_url();?>assets/js/zice.custom.js"></script> 