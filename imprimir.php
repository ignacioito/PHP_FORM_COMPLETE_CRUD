<?php 
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
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Criei um style para formatar o form: -->
      <link rel="stylesheet" type="text/css" href="css/style.css" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      
       <script type="text/javascript">
         window.print();
      </script>

    <body>
    <div class="container">
      <h4 class="center">IMPRESSÃO DE DADOS</h4><br/>



<strong>Identificação criança / adolescente / Voluntário</strong>
<p><?php echo $dados['tNome']?></p>
<p><?php echo $dados['tRg']?></p>
<p><?php echo $dados['tCpf']?></p>
<p><?php echo $dados['tMail']?></p>
<STRONG>Sexo</STRONG>
  <p><?php if ($dados['tSexo']=='Masculino'){echo 'Masculino';} ?></p><br/>
  <p><?php if ($dados['tSexo']=='Feminino'){echo 'Feminino';} ?></p><br/>

<strong>Possui deficiência?</strong>
  <p><?php if ($dados['input_fildeset_deficiencia']=='Sim'){echo 'Sim';} ?></p><br/>
  <p><?php if ($dados['input_fildeset_deficiencia']=='Nao'){echo 'Não';} ?></p>
</fieldset>
<p><?php echo $dados['tQual']?></p>
<p>Data de Nascimento: <?php echo $dados['tNasc']?></p>
<p>Nome da Mãe:<?php echo $dados['tNomeM']?></p>
<p>Telefone:<?php echo $dados['tTel']?></p>


<fieldset id="laudo"><strong>Laudo Médico?</strong>
  <p><?php if ($dados['input_fildeset_laudo']=='Sim'){echo 'Sim';} ?></p>
  <p><?php if ($dados['input_fildeset_laudo']=='Nao'){echo 'Não';} ?></p>
</fieldset>
<fieldset id="defasagem"><strong>Defasagem</strong>
  <p><?php if ($dados['input_fildeset_defasagem']=='Sim'){echo 'Sim';} ?><p><br/>
  <p><?php if ($dados['input_fildeset_defasagem']=='Nao'){echo 'Não';} ?></p>
</fieldset>                                                                                             

<p>Série:<?php echo $dados['tSerie']?></p>
<fieldset><strong>Turno:</strong>
  <p><?php if ($dados['input_fildeset_turno']=='Manha'){echo 'Manhã';} ?></p>
  <p><?php if ($dados['input_fildeset_turno']=='Tarde'){echo 'Tarde';} ?></p>
  <p><?php if ($dados['input_fildeset_turno']=='Noite'){echo 'Noite';} ?></p>
</fieldset>

<p>Especificar: <?php echo $dados['tEspecificar']?></p>
<p>Dificuldades de aprendizagem, alfabetização?</p> <p><?php echo $dados['tDif']?></p>

  <fieldset id="cadastro_resp">
<strong>Identificação do Responsável Familiar</strong>
<p>Nome do Responsável: <?php echo $dados['tNomeResp']?></p>
<p>RG: <?php echo $dados['tRgId']?></p>
<p>CPF: <?php echo $dados['tCpfId']?></p>

<fieldset id="endereco"><strong>Endereço:</strong>
<p>Rua: <?php echo $dados['tRua']?></p>
<p>Número: <?php echo $dados['tNum']?></p>
<p>Compl: <?php echo $dados['tCompl']?></p>
<p>Bairro: <?php echo $dados['tBairro']?></p>
<p><?php echo $dados['tCep']?></p>
<p>Ref:<?php echo $dados['tRef']?></p>
<p>Data de Nascimento: <?php echo $dados['tNasc2']?></p>
<p>Telefone: <?php echo $dados['tTel2']?></p></fieldset>


<fieldset id="dependencia"><strong>Dependência Química:</strong>
  <p><?php if ($dados['input_fildeset_dependencia']=='Sim'){echo 'Sim';} ?></p>
  <p><?php if ($dados['input_fildeset_dependencia']=='Nao'){echo 'Não';} ?></p>

<p>Qual: <?php echo $dados['tQual2']?></p>
<p>Quem: <?php echo $dados['tQuem']?></p>
<p>Relação de Trabalho: <?php echo $dados['tRtrab']?></p>
<p>Nº de Membros: <?php echo $dados['tNumM']?></p>
<p>Renda Mensal R$: <?php echo $dados['tValor2']?></p>
<p>Per Capita: <?php echo $dados['tPC']?></p></fieldset>


<fieldset id="beneficiario"><strong>Beneficiário de Programas de Transferência de Renda:</strong>
  <p><?php if ($dados['input_fildeset_beneficiario']=='Sim'){echo 'Sim';} ?></p>
  <p><?php if ($dados['input_fildeset_beneficiario']=='Nao'){echo 'checked';} ?></p>
</fieldset>
<p>Valor R$: <?php echo $dados['tValor']?></p>
  </fieldset>

  <fieldset id="dados_familiares">
<table class="responsive-table  highlight light-blue lighten-4" id="tabelaspec">
<caption><strong>Composição Familiar:</strong></caption>

<tr><td class="ce"><p>Nome dos Moradores</p></td><td class="cd"><p><?php echo $dados['tNomeMor']?></p></td></tr>
<tr><td class="ce"><p>Vínculo</p></td><td class="cd"><P><?php echo $dados['tVinc']?></P></td></tr>
<tr><td class="ce"><p>Data Nascimento Respectivamente</p></td><td class="cd"><p><?php echo $dados['tDN']?></p></td></tr>
<tr><td class="ce"><p>Escolaridade</p></td><td class="cd"><p><?php echo $dados['tEsc']?></p></td></tr>
<tr><td class="ce"><p>Ocupação</p></td><td class="cd"><p><?php echo $dados['tOc']?></p></td></tr>

</table>
</fieldset>
<br/>
<fieldset id="condicoes_moradia"><strong>Condições de Moradia:</strong>
<p><?php if ($dados['input_fildeset_tMoradia']=='Propria'){echo 'Própria';} ?></p> 
<p><?php if ($dados['input_fildeset_tMoradia']=='Cedida'){echo 'Cedida';} ?></p>
<p><?php if ($dados['input_fildeset_tMoradia']=='Area de Ocupacao'){echo 'Área de Ocupação';} ?></p> 
<p><?php if ($dados['input_fildeset_tMoradia']=='Alugada'){echo 'Alugada';} ?></p><br/> 
<p>Valor R$: <?php echo $dados['tValor3']?></p></fieldset><br/>

<fieldset id="tipo_construcao"><strong>Tipo de Construção:</strong>
<p><?php if ($dados['input_fildeset_tConstr']=='Alvenaria'){echo 'checked';} ?></p>
<p><?php if ($dados['input_fildeset_tConstr']=='Madeira'){echo 'checked';} ?></p>
<p><?php if ($dados['input_fildeset_tConstr']=='Mista'){echo 'checked';} ?></p></fieldset>

<p><p>Atividades: </p><?php echo $dados['tAtv']?></p>

<p>Técnico Responsável: </p><p><?php echo $dados['tTr']?></p><br><br><br><br>

<br><br><br>

    

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
    ?>