<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
    <head>
        <title>TCC</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <style type="text/css">
            #conteudo_publicado{
                border-left: 20%;
                margin-top: 10px;
                display: block;
                max-width: 80%;
                width: 80%;
                background-color: #EEE5DE;
                max-height: 60%;
                height: 60%;
                border-radius: 10px;
                overflow: auto;                
            }
        </style>
    </head>    
    <body id="corpo">
        <div id="buscar">            
            <form method="">
                <label for="busca">Pesquisar usuários</label>
                <input type="text" id="busca"/>
                <input type="submit" value="Buscar" onkeypress="suggest();"/>
            </form>
            <a style="float:right" href="home/logout"> Logout </a>
            <div id="resultado"></div>
        </div>
        <div id="conteudo_publicado">
            <?php
            if (@$conteudo) {
                foreach ($conteudo as $post) {
                    echo 'Publicação: ' . '<br>' . $post . '<br><br>';
                }
            }
            ?>
        </div>
        <div id="conteudo_novo">
            <form name="form_post" method="post" action="">
                <label for="novo_post"> Novo Post</label><br>
                <textarea name="novo_post" id="novo_post"></textarea>
                <input type="submit" value="Enviar"/>
            </form>
        </div>        
        <script type="text/javascript">
            function suggest() {
                var busca = document.getElementById('busca').value;
                if (busca != "") {
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                            document.getElementById('resultado').innerHTML = xmlhttp.responseText;
                        }
                    };
                    var target = ('buscaperfil?busca=' + busca);
                    xmlhttp.open('GET', target, true);
                    xmlhttp.send();
                }
                else
                    document.getElementById('resultado').visibility = false;
            }
            $('form[name="form_post"]').submit(function() {
                var url = "<?php echo base_url(); ?>mensagem";
                $.ajax({
                    dataType: 'String',
                    type: 'POST',
                    data: $("#novo_post"),
                    url: url,
                    cache: false,
                    success:
                            function(data) {

                            }
                });
                location.reload();
            });
        </script>
    </body>
</html>
