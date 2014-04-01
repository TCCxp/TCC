<html>
    <head><title></title>
        <script language="javascript">
        </script>
         <link href="../css/layout.css" rel="stylesheet" type="text/css">
               
    </head>
    <body>
        <h3>Cadastro de usuário</h3>
        <div id="info_usuario">
            <?php echo validation_errors(); ?>
            <?php echo form_open('cadastro/novo_usuario');?>
            <label for="nova" >Nome Completo:</label>
            <input type="text" id="nome" name="nome" size="100"/><br><br>
            <label for="nova" >Sexo:</label>
            <input type="radio" id="rb_masc" name="rb_masc" value="masculino"/>Masculino
            <input type="radio" id="rb_fem" name="rb_fem" value="feminino"/>Feminino<br><br>
            <label for="nova" >Login:</label>
            <input type="text" id="login" name="login" size="70"/><br><br>
            <label for="nova" >Email:</label>
            <input type="text" id="email" name="email" size="70"/><br><br>
            <label for="nova" >Senha:</label>
            <input type="password" id="senha" name="senha" size="30"/><br><br>
            <label for="nova" >Cidade:</label>
            <input type="text" id="cidade" name="cidade" size="70"/><br><br>
            <label for="nova" >Estado:</label>
            <input type="text" id="estado" name="estado" size="50"/><br><br>
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
            <label for="nova">Foto de perfil:</label>
            <form action="demo_form.asp">
  			<input type="file" name="img_perfil" accept="image/*" id="img_perfil" value="Selecione...">
  			<!--<input type="submit" id="img_confirmar" value="Confirmar">-->
			</form>         
            <input type="submit" class="Btn_cadastro" value="Confirmar" id="cadastro"/>
            <input type="submit" class="Btn_cadastro" value="Sair" id="sair"/>    
            <?php echo form_close();?>
        </div>
    </body>
</html>