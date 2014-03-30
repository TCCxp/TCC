<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TCC</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
<link href="templatemo_339_graphite/css/templatemo_style.css" rel="stylesheet" type="text/css" />

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
            <!--<form action="#" method="get">
              <input type="text" value="Nome de usuário" name="q" size="10" id="username" title="username" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="password" value="senha" name="q" size="10" id="password" title="password" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>-->
		</div>
    </div> <!-- end of top -->
    
  	<div id="templatemo_header">
    	<div id="site_title">
    	  <a href="http://localhost/TCC/TCC/"><img src="../../Pictures/life_invader.jpg" width="335" height="36" /></a>
          </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<!--<li><a href="templatemo_339_graphite/index.html" class="">Cadastre-se</a></li>
         		<li><a href="templatemo_339_graphite/about.html">Sobre nós</a></li>	-->
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
        
        <div id="form_cadastro">
        <label for="nova" >Nome Completo:</label>
            <input type="text" id="nome" name="nome" size="100"/><br><br>
            <label for="nova" >Sexo:</label>
            <input type="radio" id="rb_masc" name="rb_masc"/>Masculino
            <input type="radio" id="rb_fem" name="rb_fem"/>Feminino<br><br>
            <label for="nova" >Login:</label>
            <input type="text" id="login" name="login" size="70"/><br><br>
            <label for="nova" >Email:</label>
            <input type="text" id="email" name="email" size="70"/><br><br>
            <label for="nova" >Senha:</label>
            <input type="password" id="senha" name="senha" size="50"/><br><br>
            <label for="nova">Data de Nascimento:</label>
            <span class="select_data" data-type="selectors" data-name ="data_nasc">
            <select name="dia_nasc" id="dia" class="">
            <option value="0" selected="1">Dia</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            </select>
            <select name="mes_nasc" id="mes" class="">
            <option value="0" selected="1">Mes</option>
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
            </select>
            <select name="ano_nasc" id="ano" class="">
            <option value="0" selected="1">Ano</option>
            <option value="00">2000</option>
            <option value="99">1999</option>
            <option value="98">1998</option>
            <option value="97">1997</option>
            <option value="96">1996</option>
            <option value="95">1995</option>
            <option value="94">1994</option>
            <option value="93">1993</option>
            <option value="92">1992</option>
            <option value="91">1991</option>
            <option value="90">1990</option>
            <option value="89">1989</option>
            <option value="88">1988</option>
            </select>
            </span><br /> 
            <br />
            <label for="nova">Selecione sua foto de perfil:</label>
            <form action="demo_form.asp">
  			<input type="file" name="img_perfil" accept="image/*" id="img_perfil" value="Selecione...">
  			<!--<input type="submit" id="img_confirmar" value="Confirmar">-->
			</form>         
            <input type="submit" class="Btn_cadastro" value="Confirmar" id="cadastro"/>
            <input type="submit" class="Btn_cadastro" value="Sair" id="sair"/>    
        </div>
        <div id="conteudo_novo">
            
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