<?php

    //IdentificaÃ§Ã£o CrianÃ§a / Adolescente / Funcionario

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
    
    
     //Laudo MÃ©dico / Defasagem

    $input_fildeset_laudo = addslashes($_POST['tLaudo']);
    $input_fildeset_defasagem = addslashes($_POST['tDefa']);

    //Escola

    $tEscola = addslashes($_POST['tEscola']);
    $tSerie = addslashes($_POST['tSerie']);
    $input_fildeset_turno = addslashes($_POST['tTurno']);
    $tEspecificar = addslashes($_POST['tEspc']);
    $tDif = addslashes($_POST['tDif']);

    //IdentificaÃ§Ã£o do ResponsÃ¡vel Familiar

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

    //ComposiÃ§Ã£o Familiar

    //$tCompF = addslashes($_POST['tCompF']);
    $tVinc = addslashes($_POST['tVinc']);
    $tDN = addslashes($_POST['tDN']);
    $tEsc = addslashes($_POST['tEsc']);
    $tOc = addslashes($_POST['tOc']);

    //HabitaÃ§Ã£o

    $input_fildeset_tMoradia = addslashes($_POST['tMoradia']);
    $tValor3 = addslashes($_POST['tValor3']);

    //Tipo construÃ§Ã£o

    $input_fildeset_tConstr = addslashes($_POST['tConstr']);

    //Atividades

    $tAtv = addslashes($_POST['tAtv']);

    //Tecnico ResponsÃ¡vel

    $tTr = addslashes($_POST['tTr']);

    //Conecta Ao banco de dados
    include 'connect.php';
    
    //insere os dados no banco de dados e se não conseguir informa um erro no mysql
    //####(....) inserir os valores das colunas da tabela do banco de dados##### 
    $insere_dados=$pdo->prepare("INSERT INTO cadastro (id, tNome,tRg, tCpf, tMail, tSexo, input_fildeset_deficiencia, tQual, tNasc, tNomeM,"
            . " tTel,input_fildeset_laudo,input_fildeset_defasagem,tEscola,tSerie,input_fildeset_turno,"
            . " tEspecificar,tDif,tNomeResp,tRgId,tCpfId,tRua,tNum,tCompl,tBairro,tCep,tRef,"
            . " tNasc2,tTel2,input_fildeset_dependencia,tQual2,tQuem,tRtrab,tNumM,tValor2,tPC,"
            . " input_fildeset_beneficiario,tValor,tVinc,tDN,tEsc,tOc,input_fildeset_tMoradia,"
            . " tValor3,input_fildeset_tConstr,tAtv,tTr)"
            . " VALUES('','$tNome','$tRg','$tCpf','$tMail','$tSexo','$input_fildeset_deficiencia','$tQual', '$tNasc', '$tNomeM',"
            . "'$tTel', '$input_fildeset_laudo','$input_fildeset_defasagem','$tEscola','$tSerie','$input_fildeset_turno',"
            . "'$tEspecificar','$tDif','$tNomeResp','$tRgId','$tCpfId','$tRua','$tNum','$tCompl','$tBairro','$tCep','$tRef',"
            . "'$tNasc2','$tTel2','$input_fildeset_dependencia','$tQual2','$tQuem','$tRtrab','$tNumM','$tValor2','$tPC',"
            . "'$input_fildeset_beneficiario','$tValor','$tVinc','$tDN','$tEsc','$tOc','$input_fildeset_tMoradia',"
            . "'$tValor3','$input_fildeset_tConstr','$tAtv','$tTr')");
    
    $insere_dados->execute() ;
    //Executa um JS Alertando o Cadastro com Sucesso e Redireciona para a página listar.php
    echo("<script type='text/javascript'> alert('Cadastrado Com Sucesso!'); window.location='listar.php';</script>");	
    
    ?>