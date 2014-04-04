<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
    <head>
        <title>TCC</title>
        <style>
            
            #form_login{
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
			font-size:16px;
            }

        </style>
    </head>
    <body id="form_login">
        <div id="cabecalho">
            <div id="login">
                <?php echo validation_errors(); ?>
                <?php echo form_open('autentica');?>
                <label for="name">Login:</label>
                <input type="text" name="login" id="login" value="" /><br><br>
                <label for="name">Senha:</label>
                <input type="password" name="senha" id="senha" value="" /><br><br>
                <input type="submit" value="Login" name="Btn_Login"/>
                <?php echo form_close();?>
                <a href="principal/novo_usuario"> Cadastre - se aqui!</a>
            </div>
        </div>
        
    </body>
</html>