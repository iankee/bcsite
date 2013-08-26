
         
<div id="alertMessage" class="error"></div>
<div id="successLogin"></div>
<div class="text_success"><img src="<?php echo base_url();?>assets/images/loadder/loader_green.gif"  alt="ziceAdmin" /><span>Please wait</span></div>

<div id="login" >
  <div class="ribbon"></div>
  <div class="inner">
  <div  class="logo" ><img src="<?php echo base_url();?>assets/images/logo.png" alt="BC" /></div>
  <div class="userbox"></div>
  <div class="formLogin">
   <form name="formLogin"  id="formLogin" action="<?php echo base_url();?>login/process" method="post">
          <div class="tip">
          <input name="username" type="text"  id="username_id"  title="Username"   />
          </div>
          <div class="tip">
          <input name="password" type="password" id="password"   title="Password"  />
          </div>
          <div style="padding:20px 0px 0px 0px ;">
            <div style="float:left; padding:0px 0px 2px 0px ;">
           <input type="checkbox" id="on_off" name="remember" class="on_off_checkbox"  value="1"   />
              <span class="f_help">Remember me</span>
              </div>
          <div style="float:right;padding:2px 0px ;">
              <div> 
                <ul class="uibutton-group">
                   <li><a class="uibutton normal"  id="but_login" >Login</a></li>
           
               </ul>
              </div>
            </div>
</div>

    </form>
  </div>
</div>
  <div class="clear"></div>
  <div class="shadow"></div>
</div>

<!--Login div-->
<div class="clear"></div>
<div id="versionBar" >
  <div class="copyright" > &copy; Copyright 2012  All Rights Reserved <span class="tip"><a  href="#" title="Zice Admin" >Your company</a> </span> </div>
  <!-- // copyright-->
</div>
<!-- Link JScript-->

<script type="text/javascript" src="<?php echo base_url();?>assets/components/effect/jquery-jrumble.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/components/ui/jquery.ui.min.js"></script>     
<script type="text/javascript" src="<?php echo base_url();?>assets/components/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/components/checkboxes/iphone.check.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/login.js"></script>
