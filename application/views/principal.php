<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
    <head>
        <title>TCC</title>
        <style type="text/css">
            
        </style>
    </head>
    <body id="corpo">
        <div id="cabecalho">
            <div id="login">
                <?php echo validation_errors(); ?>
                <?php echo form_open('autentica');?>
                <label for="name">Login </label>
                <input type="text" name="login" id="login" value="" />
                <label for="name">Senha </label>
                <input type="password" name="senha" id="senha" value="" />
                <input type="submit" value="Login"/>
                <?php echo form_close();?>
                <a href="principal/novo_usuario"> Cadastre - se aqui!</a>
            </div>
        </div>
        <div id="conteudo">
            Conteudo</div>
    </body>
</html>