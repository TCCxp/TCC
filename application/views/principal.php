<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TCC</title>

<link href="<?php echo base_url('css/layout.css');?>" rel="stylesheet"/>

<script type="text/javascript" src="templatemo_339_graphite/js/swfobject.js"></script>
<script type="text/javascript">
	var flashvars = {};
	flashvars.xml_file = "photo_list.xml";
	var params = {};
	params.wmode = "transparent";
	var attributes = {};
	attributes.id = "slider";
	swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "480", "360", "9.0.0", false, flashvars, params, attributes);
</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="templatemo_339_graphite/css/ddsmoothmenu.css" />

<script type="text/javascript" src="templatemo_339_graphite/js/jquery.min.js"></script>
<script type="text/javascript" src="templatemo_339_graphite/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body id="home">
<div id="templatemo_wrapper">
	<div id="templatemo_top">
    	<div id="templatemo_login">
           <?php echo validation_errors(); ?>
               <?php echo form_open('autentica'); ?>
              <input type="text" value="Login" name="login" size="10" id="login" title="username" onFocus="clearText(this)" onBlur="clearText(this)" class="txt_field" />
              <input type="password" value="senha" name="senha" size="10" id="senha" title="password" onFocus="clearText(this)" onBlur="clearText(this)" class="txt_field" />
              <input type="submit" name="Btn_Login" value="" alt="Search" id="Btn_Login" title="Search" class="sub_btn"  />
             <?php echo form_close(); ?>
		</div>
    </div> <!-- end of top -->
    
  	<div id="templatemo_header">
    	<div id="site_title">
    	  <h1><img src="<?php echo base_url('images/.jpg')?>" width="335" height="36" /></h1></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
           
              	<h5><a href="principal/novo_usuario" class="">Cadastre-se aqui!</a></h5>
         		           
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
        <div id="mid_left">
            <div id="mid_title">
                Seja bem vindo ao Life Invader<span>Cadastre-se agora e venha publicar as suas idéias!</span>
            </div>
            <p>"Life invader é um gerenciador de conteúdo criado para você. Compartilhe com os outros seus textos e criações".</p>
            </div>
            
        <div id="mid_slider">
        	
            <img src="<?php echo base_url('images/principal_img.jpg')?>" width="900px"/>
    </div>
        </div>
      
        <div class="cleaner"></div>
        
    </div> <!-- end of templatemo_middle -->
    
    <div id="templatemo_main">
    	
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->
<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2014 <a href="#">HUEBR</a> | 
        Designed by <a href="https://www.facebook.com/diegohenrique.presner" rel="nofollow" target="_parent">BOD3V3IO</a>
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='templatemo_339_graphite/js/logging.js'></script>
</body>
</html>