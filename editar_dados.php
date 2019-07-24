<?php session_start(); if($_SESSION['userc'] and $_SESSION['senhac'] == true ){ include 'connect.php';?><?php 
include 'connect.php';

$id= $_REQUEST["id"];
$sql = $pdo->prepare("select * from cadastro where id='$id' ");
$sql->execute();
$dados = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <title>Cadastro</title>
      <meta charset="utf-8"/>
          <link rel="icon" href="img/favicon.png">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Criei um style para formatar o form: -->
      <link rel="stylesheet" type="text/css" href="css/style.css" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    </head>

    <body>
    <div class="container">
      <h4 class="center">EDIÇÃO DE DADOS</h4><br/>

<form method="post" id="fContato" action="">
  <fieldset id="cadastro">
<legend>Identificação criança / adolescente / Voluntário</legend>
<p><label for="cNome">Nome:</label><input type="text" name="tNome" value="<?php echo $dados['tNome']?>" id="cNome" size="20" maxlength="40" placeholder="Nome Completo" /></p>
<p><label for="cRg">RG:</label><input type="text" name="tRg" value="<?php echo $dados['tRg']?>" id="cRg" size="9" maxlength="9" placeholder="RG"></p>
<p><label for="cCpf">CPF:</label><input type="text" name="tCpf" id="cCpf" value="<?php echo $dados['tCpf']?>" maxlength="11" placeholder="CPF"></p>
<p><label for="cEmail">Email:</label><input type="email" name="tMail" value="<?php echo $dados['tMail']?>" id="cEmail" size="20" maxlength="40" placeholder="Email" /></p>
<fieldset id="sexo"><legend>Sexo:</legend>
  <input type="radio" name="tSexo" value="Masculino" id="cMasc" <?php if ($dados['tSexo']=='Masculino'){echo 'checked';} ?>/><label for="cMasc">Masculino</label><br/>
  <input type="radio" name="tSexo" value="Feminino"  id="cFem" <?php if ($dados['tSexo']=='Feminino'){echo 'checked';} ?>/> <label for="cFem">Feminino</label><br/>
</fieldset>
<fieldset id="deficiencia"><legend>Possui deficiência?</legend>
  <input type="radio" name="tDeficiencia" value="Sim" id="cSim" <?php if ($dados['input_fildeset_deficiencia']=='Sim'){echo 'checked';} ?>/><label for="cSim">Sim</label><br/>
  <input type="radio" name="tDeficiencia" value="Nao" id="cNao" <?php if ($dados['input_fildeset_deficiencia']=='Nao'){echo 'checked';} ?>/><label for="cNao">Nao</label>
</fieldset>
<p><label for="cQual">Qual:<label><input type="text" name="tQual" value="<?php echo $dados['tQual']?>" id="cQual" size="20" maxlength="40" placeholder="Qual" /></p>
<p><label for="cNasc">Data de Nascimento:</label><input type="date"  name="tNasc" value="<?php echo $dados['tNasc']?>" id="cNasc"></p>
<p><label for="cNomeM">Nome da Mãe:</label><input type="text" name="tNomeM" value="<?php echo $dados['tNomeM']?>" id="cNomeM" size="20" maxlength="40" placeholder="Nome Completo" /></p>
<p><label for="cTel">Telefone:</label><input type="number" name="tTel" value="<?php echo $dados['tTel']?>" id="cTel" placeholder="(11)99999-9999"/></p>


<fieldset id="laudo"><legend>Laudo Médico?</legend>
  <input type="radio" name='tLaudo' value="Sim" id='cLaudoSim' <?php if ($dados['input_fildeset_laudo']=='Sim'){echo 'checked';} ?>/><label for='cLaudoSim'>Sim</label><br/>
  <input type="radio" name='tLaudo' value="Nao" id='cLaudoNao' <?php if ($dados['input_fildeset_laudo']=='Nao'){echo 'checked';} ?>/><label for='cLaudoNao'>Não</label>
</fieldset>
<br>
<fieldset id="defasagem"><legend>Defasagem</legend>
  <input type="radio" name="tDefa" value="Sim" id='cDefaSim' <?php if ($dados['input_fildeset_defasagem']=='Sim'){echo 'checked';} ?>/><label for='cDefaSim'>Sim</label><br/>
  <input type="radio" name="tDefa" value="Nao" id="cDefaNao" <?php if ($dados['input_fildeset_defasagem']=='Nao'){echo 'checked';} ?>/><label for="cDefaNao">Não</label>
</fieldset>                                                                                             

<p><label for="cSerie">Série:</label><input type="text" name="tSerie" value="<?php echo $dados['tSerie']?>" id="cSerie" size="20" maxlength="40" placeholder="Escreva por Extenso"></p>
<fieldset><legend>Turno:</legend>
  <input type="radio" value="Manha" name="tTurno" id="cManha" <?php if ($dados['input_fildeset_turno']=='Manha'){echo 'checked';} ?> /><label for="cManha" >Manhã</label>
  <input type="radio" value="Tarde" name="tTurno" id="cTarde" <?php if ($dados['input_fildeset_turno']=='Tarde'){echo 'checked';} ?> /><label for="cTarde">Tarde</label>
  <input type="radio" value="Noite" name="tTurno" id="cNoite" <?php if ($dados['input_fildeset_turno']=='Noite'){echo 'checked';} ?> /><label for="cNoite">Noite</label>
</fieldset>

<p><label for="cEspc">Especificar:</label><input type="text" name="tEspc" value="<?php echo $dados['tEspecificar']?>" id="cEspc" size="30" maxlength="40" placeholder="Especifique"></p>
<p><label for="cDif">Dificuldades de aprendizagem, alfabetização?</label><input type="text" name="tDif" value="<?php echo $dados['tDif']?>" id="cDif" size="20" maxlength="30" placeholder="Insira Texto"></p>

  <fieldset id="cadastro_resp">
<legend>Identificação do Responsável Familiar</legend>
<p><label for="cNomeResp">Nome do Responsável:</label><input type="text" name="tNomeResp" value="<?php echo $dados['tNomeResp']?>" id="cNomeResp" size="20" maxlength="40" placeholder="Nome Completo" /></p>
<p><label for="cRgId">RG:</label><input type="text" name="tRg" value="<?php echo $dados['tRg']?>" id="cRgId" size="9" maxlength="9" placeholder="RG"></p>
<p><label for="cCpfId">CPF:</label><input type="text" name="tCpfId" value="<?php echo $dados['tCpfId']?>" id="cCpfId" size="11" maxlength="11" placeholder="CPF"></p>

<fieldset id="endereco"><legend>Endereço:</legend>
<p><label for="cRua">Rua:</label><input type="text" name="tRua" value="<?php echo $dados['tRua']?>" id="cRua" size="13" maxlength="80" placeholder="Rua"></p>
<p><label for="cNum">Número:</label><input type="Number" name="tNum" value="<?php echo $dados['tNum']?>" id="cNum" min="0" max="99999"></p>
<p><label for="cCompl">Compl:</label><input type="text" name="tCompl" value="<?php echo $dados['tCompl']?>" id="cCompl" size="10" maxlength="20"></p>
<p><label for="cBairro">Bairro:</label><input type="text" name="tBairro" value="<?php echo $dados['tBairro']?>" id="cBairro" size="30" maxlength="40"></p>
<p><label for="cCep">Cep:</label><input type="number" name="tCep" value="<?php echo $dados['tCep']?>" id="cCep"></p>
<p><label for="cRef">Ref:</label><input type="text" name="tRef" value="<?php echo $dados['tRef']?>" id="cRef" size="30" maxlength="40"></p>
<p><label for="cNasc2">Data de Nascimento:</label><input type="date" name="tNasc2" value="<?php echo $dados['tNasc2']?>" id="cNasc2"></p>
<p><label for="cTel2">Telefone:</label><input type="text" name="tTel2" value="<?php echo $dados['tTel2']?>" id="cTel2" size="30" maxlength="40"></p></fieldset>


<fieldset id="dependencia"><legend>Dependência Química:</legend>
  <input type="radio" value="Sim" name="tDepend" id="cDepend1" <?php if ($dados['input_fildeset_dependencia']=='Sim'){echo 'checked';} ?>><label for="cDepend1" >Sim</label>
  <input type="radio" value="Nao" name="tDepend" id="cDepend2" <?php if ($dados['input_fildeset_dependencia']=='Nao'){echo 'checked';} ?>><label for="cDepend2">Não</label>

<p><label for="cQual2">Qual:</label><input type="text" name="tQual2" value="<?php echo $dados['tQual2']?>" id="cQual2" size="13" maxlength="80" placeholder="Digite o texto"></p>
<p><label for="cQuem">Quem:</label><input type="text" name="tQuem" value="<?php echo $dados['tQuem']?>" id="cQuem" size="13" maxlength="80" placeholder="Digite o texto"></p>
<p><label for="tRtrab">Relação de Trabalho:</label><input type="text" name="tRtrab" value="<?php echo $dados['tRtrab']?>" id="cRtrab" size="13" maxlength="80" placeholder="Digite o texto"></p>
<p><label for="cNumM">Nº de Membros:</label><input type="number" name="tNumM" value="<?php echo $dados['tNumM']?>" id="cNumM" placeholder="Digite o texto"></p>
<p><label for="cValor2">Renda Mensal R$:</label><input type="text" name="tValor2" value="<?php echo $dados['tValor2']?>" id="cValor2"></p>
<p><label for="tPC">Per Capita:</label><input type="text" name="tPC" value="<?php echo $dados['tPC']?>"  id="cPC" size="13" maxlength="80" placeholder="Digite o texto"></p></fieldset>


<fieldset id="beneficiario"><legend>Beneficiário de Programas de Transferência de Renda:</legend>
  <input type="radio" value="Sim" name="tBen" id="cBen1" <?php if ($dados['input_fildeset_beneficiario']=='Sim'){echo 'checked';} ?>><label for="cBen1" >Sim</label>
  <input type="radio" value="Nao" name="tBen" id="cBen2" <?php if ($dados['input_fildeset_beneficiario']=='Nao'){echo 'checked';} ?>><label for="cBen2">Não</label>
</fieldset>
<p><label for="cValor1">Valor R$:</label><input type="text" name="tValor" value="<?php echo $dados['tValor']?>"  id="cValor1"></p>
  </fieldset>

  <fieldset id="dados_familiares">
<table class="responsive-table  highlight light-blue lighten-4" id="tabelaspec">
<caption><h1>Composição Familiar:</h1></caption>

<tr><td class="ce"><label for="cNomeMor">Nome dos Moradores</label></td><td class="cd"><input type="text" name="tNomeMor" value="<?php echo $dados['tNomeMor']?>"  id="cNomeMor" size="20" maxlength="40"></td></tr>
<tr><td class="ce"><label for="cVinc">Vínculo</label></td><td class="cd"><input type="text" name="tVinc" value="<?php echo $dados['tVinc']?>"  id="cVinc" size="20" maxlength="40"></td></tr>
<tr><td class="ce"><label for="cDN">Data Nascimento Respectivamente</label></td><td class="cd"><input type="text" name="tDN" value="<?php echo $dados['tDN']?>" id="cDN" size="60" maxlength="80" ></td></tr>
<tr><td class="ce"><label for="cEsc">Escolaridade</label></td><td class="cd"><input type="text" name="tEsc" value="<?php echo $dados['tEsc']?>"  id="cEsc" size="20" maxlength="40"></td></tr>
<tr><td class="ce"><label for="cOc">Ocupação</label></td><td class="cd"><input type="text" name="tOc" value="<?php echo $dados['tOc']?>" id="cOc" size="20" maxlength="40"></td></tr>

</table>
</fieldset>
<br/>
<fieldset id="condicoes_moradia"><legend>Condições de Moradia:</legend>
<input type="radio" value="Propria" name="tMoradia" id="cPropria" <?php if ($dados['input_fildeset_tMoradia']=='Propria'){echo 'checked';} ?>/><label for="cPropria">Própria</label> 
<input type="radio" value="Cedida" name="tMoradia" id="cCedida" <?php if ($dados['input_fildeset_tMoradia']=='Cedida'){echo 'checked';} ?> /><label for="cCedida">Cedida</label> 
<input type="radio" value="Area de Ocupacao" name="tMoradia" id="cOcup" <?php if ($dados['input_fildeset_tMoradia']=='Area de Ocupacao'){echo 'checked';} ?>/><label for="cOcup">Área de Ocupação</label> 
<input type="radio" value="Alugada" name="tMoradia" id="cAlug" <?php if ($dados['input_fildeset_tMoradia']=='Alugada'){echo 'checked';} ?>/><label for="cAlug">Alugada</label><br/> 
<label for="cValor3">Valor R$:</label><input type="text" name="tValor3" value="<?php echo $dados['tValor3']?>" id="cValor3" /></fieldset><br/>

<fieldset id="tipo_construcao"><legend>Tipo de Construção:</legend>
<input type="radio" value="Alvenaria" name="tConstr" id="cAlv" <?php if ($dados['input_fildeset_tConstr']=='Alvenaria'){echo 'checked';} ?>><label for="cAlv">Alvenaria</label>
<input type="radio" value="Madeira" name="tConstr" id="cMad" <?php if ($dados['input_fildeset_tConstr']=='Madeira'){echo 'checked';} ?>><label for="cMad">Madeira</label>
<input type="radio" value="Mista" name="tConstr" id="cMist" <?php if ($dados['input_fildeset_tConstr']=='Mista'){echo 'checked';} ?>><label for="cMist">Mista</label></fieldset>

<p><label for="cAtv">Atividades:</label><input type="text" name="tAtv" value="<?php echo $dados['tAtv']?>" id="cAtv" size="30" maxlength="40" placeholder="Insira Texto"></p>

<p><label for="cTr">Técnico Responsável:</label><input type="text" name="tTr" value="<?php echo $dados['tTr']?>" id="cTr" size="30" maxlength="40" placeholder="Insira Texto"></p><br><br><br><br>

<a class="waves-effect waves-light btn teal lighten-2" 
href="javascript:window.history.go(-1)" >VOLTAR</a>
<input type="submit" name="atualiza" class="waves-effect waves-light btn right blue darken-1" value="ATUALIZAR" /><br><br><br><br>

    
</form>
<footer class="page-footer card-panel  blue darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">L&I Comunicação</h5>
              </div>
              <div class="col l4 offset-l2 s12">
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <img src="images/logo.png" alt="Logo" style="width: 50px; height: 50px; float: left;"> <p>© 2017 Copyright L&I Comunicação</p>
            </div>
          </div>
        </footer>
      </div>
    </body>
  </html>
  
  <?php
if (isset($_POST['atualiza'])){
    //Identificação Criança / Adolescente / Funcionario

    $tNome = addslashes($_POST['tNome']); 
    $tRg = addslashes($_POST['tRg']);
    $tCpf = addslashes($_POST['tCpf']);
    $tMail = addslashes($_POST['tMail']);
    $tSexo = addslashes($_POST['tSexo']);
    $input_fildeset_deficiencia = addslashes($_POST['tDeficiencia']);
    $tQual = addslashes($_POST['tQual']);
    $tNasc = addslashes($_POST['tNasc']);
    $tNomeM = addslashes($_POST['tNomeM']);
    $tTel = addslashes($_POST['tTel']);
    
    
     //Laudo Médico / Defasagem

    $input_fildeset_laudo = addslashes($_POST['tLaudo']);
    $input_fildeset_defasagem = addslashes($_POST['tDefa']);

    //Escola

    $tEscola = addslashes($_POST['tEscola']);
    $tSerie = addslashes($_POST['tSerie']);
    $input_fildeset_turno = addslashes($_POST['tTurno']);
    $tEspecificar = addslashes($_POST['tEspc']);
    $tDif = addslashes($_POST['tDif']);

    //Identificação do Responsável Familiar

    $tNomeResp = addslashes($_POST['tNomeResp']);
    $tRgId = addslashes($_POST['tRgId']);
    $tCpfId = addslashes($_POST['tCpfId']);

    $tRua = addslashes($_POST['tRua']);
    $tNum = addslashes($_POST['tNum']);
    $tCompl = addslashes($_POST['tCompl']);
    $tBairro = addslashes($_POST['tBairro']);
    $tCep = addslashes($_POST['tCep']);
    $tRef = addslashes($_POST['tRef']);
    $tNasc2 = addslashes($_POST['tNasc2']);
    $tTel2 = addslashes($_POST['tTel2']);

    $input_fildeset_dependencia = addslashes($_POST['tDepend']);

    $tQual2 = addslashes($_POST['tQual2']);
    $tQuem = addslashes($_POST['tQuem']);
    $tRtrab = addslashes($_POST['tRtrab']);
    $tNumM = addslashes($_POST['tNumM']);
    $tValor2 = addslashes($_POST['tValor2']);
    $tPC = addslashes($_POST['tPC']);

    $input_fildeset_beneficiario = addslashes($_POST['tBen']);
    $tValor = addslashes($_POST['tValor']);

    //Composição Familiar

    //$tCompF = addslashes($_POST['tCompF']);
    $tNomeMor = addslashes($_POST['tNomeMor']);
    $tVinc = addslashes($_POST['tVinc']);
    $tDN = addslashes($_POST['tDN']);
    $tEsc = addslashes($_POST['tEsc']);
    $tOc = addslashes($_POST['tOc']);

    //Habitação

    $input_fildeset_tMoradia = addslashes($_POST['tMoradia']);
    $tValor3 = addslashes($_POST['tValor3']);

    //Tipo construção

    $input_fildeset_tConstr = addslashes($_POST['tConstr']);

    //Atividades

    $tAtv = addslashes($_POST['tAtv']);

    //Tecnico Responsável

    $tTr = addslashes($_POST['tTr']);

    include 'connect.php';

    $atualiza = $pdo->prepare("update cadastro set tNome='$tNome', tRg='$tRg', tCpf='$tCpf', tMail='$tMail', tSexo='$tSexo', input_fildeset_deficiencia='', tQual='$tQual', tNasc='$tNasc', tNomeM='$tNomeM', tTel='$tTel', input_fildeset_laudo='$input_fildeset_laudo', input_fildeset_defasagem='$input_fildeset_defasagem', tEscola='$tEscola', tSerie='$tSerie', input_fildeset_turno='$input_fildeset_turno', tEspecificar='$tEspecificar', tDif='$tDif', tNomeResp='$tNomeResp', tRgId='$tRgId', tCpfId='$tCpfId', tRua='$tRua', tNum='$tNum', tCompl='$tCompl', tBairro='$tBairro', tCep='$tCep', tRef='$tRef', tNasc2='$tNasc2', tTel2='$tTel2', input_fildeset_dependencia='$input_fildeset_dependencia', tQual2='$tQual2', tQuem='$tQuem', tRtrab='$tRtrab', tNumM='$tNumM', tValor2='$tValor2', tPC='$tPC', input_fildeset_beneficiario='$input_fildeset_beneficiario', tValor='$tValor', tNomeMor='$tNomeMor', tVinc='$tVinc', tDN='$tDN', tEsc='$tEsc', tOc='$tOc', input_fildeset_tMoradia='$input_fildeset_tMoradia', tValor3='$tValor3', input_fildeset_tConstr='', tAtv='$tAtv', tTr='$tTr' WHERE id='$id'");
    $atualiza->execute();
    //Executa um JS Alertando o Cadastro com Sucesso e Redireciona para a página principal
    echo("<script type='text/javascript'> alert('Atualizado Com Sucesso!'); window.location='editar_dados.php?id=$id';</script>");	
} 
    ?><?php }else{ header('location:http://ongresgatandovidas.com/cadastro/');}?>