<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<html>
    <head>
        <title>TCC</title>
        <style type="text/css">

        </style>
    </head>
    <body id="corpo">
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
            <p>Novo Usuário?</p>
            <a href="novo_usuario"> Cadastre - se aqui!</a>
        </div>
    </body>
</html>