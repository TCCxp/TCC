<html>
<<<<<<< HEAD
    <head><title>TCC</title>
        <!--<link href="layout.css" rel="stylesheet" type="text/css"/>-->
       <style>
	   #form_cadastro{
=======
    <head><title></title>
        <script language="javascript">
        </script>
        <style>
         			#corpo{
                background-color: #8B1A1A;
                margin-left: 150px;
            }
            #buscar{
                margin-top: -8;
                background-color: #EEE5DE;
                height: 33px;
                max-height: 33px;
                width: 80%;
                max-width: 80%;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
            }
            #conteudo_novo{                
                margin-top: 10px;
                width: 80%;
                height: 30%;
            }
            #conteudo_publicado{
			border-left: 20%;
			margin-top: 10px;
			display: block;
			max-width: 80%;
			width: 80%;
			background-color: #FFF;
			max-height: 60%;
			height: 60%;
			border:double;
			border-radius: 10px;
			overflow: auto;
            }
			
			#form_cadastro{
>>>>>>> e3558e32be97e7e0f4c15a857733e400884bd395
			padding-top: 15px;
			padding-left: 15px;
			border-left: 20%;
			margin-top: 10px;
			display: block;
			width: 700px;
			background-color: #FFF;
			height: auto;
			border:double;
			border-radius: 10px;
			font:"Arial Black", Gadget, sans-serif;
<<<<<<< HEAD
			font-size:16px;
            }
	   </style>
    </head>
    <body id="form_cadastro">
        <h3>Cadastro de usuário</h3>
        <div id="info_usuario">
=======
			font-size:20px;
            }
			
			#form_perfil{
			padding-top: 15px;
			padding-left: 15px;
			border-left: 20%;
			margin-top: 10px;
			display: block;
			width: 900px;
			background-color: #FFF;
			height: 200px;
			border:double;
			border-radius: 10px;
			font:"Arial Black", Gadget, sans-serif;
			font-size:16px;
            }
			
			#form_publica_conteudo{
			padding-top: 10px;
			padding-left: 10px;
			border-left: 20%;
			margin-top: 100px;
			margin-bottom: 100px:
			display: block-inline;
			width: 500px;
			background-color: #FFF;
			height: 100px;
			border:double;
			border-radius: 10px;
			font:"Arial Black", Gadget, sans-serif;
			font-size:16px;
            }
			
			select_data{
				display:inline-block;
			}
			
			.Btn_cadastro {
				-moz-box-shadow:inset 2px 2px 5px -6px #fed897;
				-webkit-box-shadow:inset 2px 2px 5px -6px #fed897;
				box-shadow:inset 2px 2px 5px -6px #fed897;
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f6b33d), color-stop(1, #d29105) );
				background:-moz-linear-gradient( center top, #f6b33d 5%, #d29105 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6b33d', endColorstr='#d29105');
				background-color:#f6b33d;
				-webkit-border-top-left-radius:0px;
				-moz-border-radius-topleft:0px;
				border-top-left-radius:0px;
				-webkit-border-top-right-radius:0px;
				-moz-border-radius-topright:0px;
				border-top-right-radius:0px;
				-webkit-border-bottom-right-radius:0px;
				-moz-border-radius-bottomright:0px;
				border-bottom-right-radius:0px;
				-webkit-border-bottom-left-radius:0px;
				-moz-border-radius-bottomleft:0px;
				border-bottom-left-radius:0px;
				text-indent:1.57px;
				border:1px solid #eda933;
				display:inline-block;
				color:#ffffff;
				font-family:Arial Black;
				font-size:16px;
				font-weight:bold;
				font-style:normal;
				height:45px;
				line-height:45px;
				width:157px;
				text-decoration:none;
				text-align:center;
				text-shadow:-1px -2px 0px #cd8a15;
				margin-top: 50px;
				margin-left: 50px;
			}
			.Btn_cadastro:hover {
				background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #d29105), color-stop(1, #f6b33d) );
				background:-moz-linear-gradient( center top, #d29105 5%, #f6b33d 100% );
				filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d29105', endColorstr='#f6b33d');
				background-color:#d29105;
			}
			.Btn_cadastro:active {
				position:relative;
				top:1px;
			}
			
            #novo_post{
                max-width:100%; 
                max-height:70%;
                width:100%; 
                height:70%;
                overflow: auto;
                resize: none;
            }
            #resultado{
                border-color: #8B1A1A;
                height: 30%;
                width: 10%;
                max-height: 30%;
                margin-left: 120px;
                margin-top: -12px;
                border-style: solid; 
                z-index: 9999;
                background-color: white;
                position: absolute;
                font-size: 25;
                display: visible;
            }

            </style>
    </head>
    <body id="form_cadastro">
        <h3>Cadastro de usu�rio</h3>
        
>>>>>>> e3558e32be97e7e0f4c15a857733e400884bd395
            <?php echo validation_errors(); ?>
            <?php echo form_open('cadastro/novo_usuario'); ?>
            <label for="nova" >Nome Completo:</label>
            <input type="text" id="nome" name="nome" size="70"/><br><br>
            <label for="nova" >Sexo:</label>
            <input type="radio" id="rb_masc" name="sexo" value="masculino"/>Masculino
            <input type="radio" id="rb_fem" name="sexo" value="feminino"/>Feminino<br><br>
            <label for="nova" >Login:</label>
            <input type="text" id="login" name="login" size="70"/><br><br>
            <label for="nova" >Senha:</label>
            <input type="password" id="senha" name="senha" size="30"/><br><br>
            <label for="nova" >Email:</label>
            <input type="text" id="email" name="email" size="70"/><br><br>
            <label for="nova" >Cidade:</label>
            <input type="text" id="cidade" name="cidade" size="50"/><br><br>
            <label for="nova" >Estado:</label>
            <span class="select_data" data-type="selectors" data-name ="uf">
                <select name="uf" id="uf" class="">
                    <option value="0" selected="1">--</option>
                    <option value="PR">PR</option>
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                </select>
            </span><br><br>
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
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                </select>
            </span><br /> 
            <br />
            <!--
                <label for="nova">Foto de perfil:</label>
                <form action="demo_form.asp">
                    <input type="file" name="img_perfil" accept="image/*" id="img_perfil" value="Selecione..."/>
            <!--</form>         -->
            <input type="submit" class="Btn_cadastro" value="Confirmar" id="cadastro"/>
<<<<<<< HEAD
            <input type="submit" class="Btn_cadastro" value="Sair" id="sair"/>    
            <?php echo form_close(); ?>
        </div>
=======
            <!--<input type="submit" class="Btn_cadastro" value="Sair" id="sair"/>-->    
            <?php echo form_close();?>
        
>>>>>>> e3558e32be97e7e0f4c15a857733e400884bd395
    </body>
</html>