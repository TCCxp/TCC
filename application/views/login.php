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
        <div>
            <form>    
                <label for="name">Login </label>
                <input type="text" name="login" id="login" value="" />
                <label for="name">Senha </label>
                <input type="text" name="senha" id="senha" value="" />
                <input type="submit" value="Logar"/>
            </form>
        </div>
        <div>
            <p>Novo Usu�rio?</p>
            <a href="novo_usuario"> Cadastre - se aqui!</a>
        </div>
    </body>
</html>
