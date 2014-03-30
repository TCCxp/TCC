<html>
    <head><title></title>
        <script language="javascript">
        </script>
    </head>
    <body>
        <h3>Cadastro de usuário</h3>
        <div id="info_usuario">
            <?php echo validation_errors(); ?>
            <?php echo form_open('cadastro/novo_usuario');?>
            <label for="nova" >Nome Completo</label>
            <input type="text" id="nome" name="nome"/><br><br>
            <label for="nova" >Login</label>
            <input type="text" id="login" name="login"/><br><br>
            <label for="nova" >Email</label>
            <input type="text" id="email" name="email"/><br><br>
            <label for="nova" >Senha</label>
            <input type="password" id="senha" name="senha"/><br><br>
            <input type="submit" value="Confirmar"/>
            <?php echo form_close();?>
        </div>
    </body>
</html>