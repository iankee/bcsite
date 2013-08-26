<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>

        <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <link href="<?php echo base_url();?>assets/css/zice.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/icon.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/tipsy/tipsy.css" media="all"/>
<style type="text/css">
html {
  background-image: none;
}
#versionBar {
  background-color:#212121;
  position:fixed;
  width:100%;
  height:35px;
  bottom:0;
  left:0;
  text-align:center;
  line-height:35px;
}
.copyright{
  text-align:center; font-size:10px; color:#CCC;
}
.copyright a{
  color:#A31F1A; text-decoration:none
}  
</style>
<!--  <?php foreach ($js_files as $src): ?>
    <script src="<?php echo $src; ?>"></script>
    <?php endforeach; ?> -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ui-custom.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/timepicker.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/colorpicker/css/colorpicker.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/elfinder/css/elfinder.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/datatables/dataTables.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/validationEngine/validationEngine.jquery.css" />
         
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/jscrollpane/jscrollpane.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/fancybox/jquery.fancybox.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/tipsy/tipsy.css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/editor/jquery.cleditor.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/chosen/chosen.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/confirm/jquery.confirm.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/sourcerer/sourcerer.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/fullcalendar/fullcalendar.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/components/Jcrop/jquery.Jcrop.css"  />
   
        
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/components/flot/excanvas.min.js"></script><![endif]-->
        
       
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/ui/jquery.ui.min.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/ui/jquery.autotab.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/ui/timepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/colorpicker/js/colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/checkboxes/iphone.check.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/elfinder/js/elfinder.full.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/datatables/dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/scrolltop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/jscrollpane/mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/jscrollpane/mwheelIntent.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/jscrollpane/jscrollpane.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/spinner/ui.spinner.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/editor/jquery.cleditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/chosen/chosen.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/confirm/jquery.confirm.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/validationEngine/jquery.validationEngine.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/validationEngine/jquery.validationEngine-en.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/vticker/jquery.vticker-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/sourcerer/sourcerer.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/flot/flot.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/flot/flot.pie.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/flot/flot.resize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/flot/graphtable.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/components/uploadify/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/uploadify/uploadify.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/checkboxes/customInput.jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/effect/jquery-jrumble.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/filestyle/jquery.filestyle.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/placeholder/jquery.placeholder.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/components/Jcrop/jquery.Jcrop.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/imgTransform/jquery.transform.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/components/webcam/webcam.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/components/rating_star/rating_star.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/components/dualListBox/dualListBox.js"  ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/components/smartWizard/jquery.smartWizard.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
               
  </head>
  <body>
  
     <?php $this->load->view($main); ?>
   
  </body>
</html>