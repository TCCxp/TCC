<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<html>
    <head>
        <title>TCC</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <style type="text/css">
            
        </style>
    </head>    
    <body id="corpo">
        <div id="buscar">            
            <form method="">
                <label for="busca">Pesquisar usu�rios</label>
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
                    echo 'Publica��o:' . '<br>' . $post . '<br><br>';
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
                // var dados = $('#novo_post');
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    data: $("#novo_post"), //{textarea: $("#novo_post").val()},
                    url: url,
                    cache: false,
                    success:
                            function(data) {
                                alert(data);  //as a debugging message.
                            }
                });
                return false;
            });
        </script>
    </body>
</html>