<?php session_start(); if($_SESSION['userc'] and $_SESSION['senhac'] == true ){ include 'connect.php';?><html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Criei um style para formatar o form: -->
          <link rel="icon" href="img/favicon.png">
      <link rel="stylesheet" type="text/css" href="css/style.css" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     
      
	</head>
<body>
	<table id="tabelaspec" padding="10px" >
		<tr class="responsive-table  highlight  blue accent-2">
            <td colspan="3">
                        <a href="cadastro.html" class="btn">Cadastrar</a>
                      	<a href="logout.php" class="btn" style="float:right;">Sair</a>		
                    <div class="col-md-8">
                    <br>
                        <div class="card">
                            <div class="header">
                                <p class="title"><strong>BUSCA DE CADASTRADOS</strong></p>
                            </div>
                            <div class="content">
                                <form method="post" action="">
                                   

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Primeiro Nome, Nome completo ou Sobrenome</label>
                                                <input type="text" name="nome" class="form-control" placeholder="Digite aqui o Nome">
                                            </div>
                                        </div>                                        
                                    </div>

									<div class="row">
                                       <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Documento CPF (Apenas Números)</label>
                                                <input type="number" name="documento" class="form-control" placeholder="Digite aqui o Documento" maxlength="11">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-fill btn-lg" type="submit" value="BUSCAR" name="busca"/>
                                </form>
                            </div>
                        </div>
                    </div>
                    </td>             
			<td><strong>ID</strong></td>
			<td><strong>NOME</strong></td>
			<td><strong>RG</strong></td>
			<td><strong>CPF</strong></td>
			<td><strong>EMAIL</strong></td>
			<td><strong>SEXO</strong></td>
			<td><strong>DEFICIÊNCIA</strong></td>
			<td><strong>QUAL</strong></td>
			<td><strong>DATA DE NASCIMENTO</strong></td>
			<td><strong>NOME DA MÃE</strong></td>
			<td><strong>TELEFONE</strong></td>
			<td><strong>LAUDO</strong></td>
			<td><strong>DEFASAGEM</strong></td>
			<td><strong>ESCOLA</strong></td>
			<td><strong>SERIE</strong></td>
			<td><strong>TURNO</strong></td>
			<td><strong>ESPECIFICAR</strong></td>
			<td><strong>DIFICULDADES DE APRENDIZAGEM</strong></td>
			<td><strong>RESPONSÁVEL</strong></td>
			<td><strong>RG RESPONSÁVEL</strong></td>
			<td><strong>CPF RESPONSÁVEL</strong></td>
			<td><strong>RUA</strong></td>
			<td><strong>NÚMERO</strong></td>
			<td><strong>COMPLEMENTO</strong></td>
			<td><strong>BAIRRO</strong></td>
			<td><strong>CEP</strong></td>
			<td><strong>REFERÊNCIA</strong></td>
			<td><strong>DATA NASCIMENTO RESPONSÁVEL</strong></td>
			<td><strong>TELEFONE</strong></td>
			<td><strong>DEPENDÊNCIA QUÍMICA</strong></td>
			<td><strong>QUAL</strong></td>
			<td><strong>QUEM</strong></td>
			<td><strong>RELAÇÃO DE TRABALHO</strong></td>
			<td><strong>Nº DE MEMBROS</strong></td>
			<td><strong>RENDA</strong></td>
			<td><strong>PER CAPTA</strong></td>
			<td><strong>Beneficiário de Programas de Transferência de Renda</strong></td>
			<td><strong>VALOR RECEBIDO</strong></td>
			<td><strong>NOME DOS MORADORES</strong></td>
			<td><strong>VÍNCULO</strong></td>
			<td><strong>DATA DE NASCIMENTO</strong></td>
			<td><strong>ESCOLARIDADE</strong></td>
			<td><strong>OCUPAÇÃO</strong></td>
			<td><strong>MORADIA</strong></td>
			<td><strong>VALOR DA MORADIA</strong></td>
			<td><strong>TIPO DE CONSTRUÇÃO</strong></td>
			<td><strong>ATIVIDADES</strong></td>
			<td><strong>TÉCNICO RESPONSÁVEL</strong></td>
			
		</tr>
		<?php 
		include 'connect.php';
                
                
                if (isset($_POST['busca'])){ 
		$documento=addslashes($_POST['documento']);
		$nome=addslashes($_POST['nome']);
		 if ($documento){
		$sql=$pdo->prepare("select * from cadastro where tCpf=".$documento."  LIMIT 1");
		$sql->execute();
		}else{
		$sql=$pdo->prepare("select * from cadastro where tNome like '%".$nome."%'  LIMIT 1");
		$sql->execute();  
		}
		$busca = $sql->fetchAll(PDO::FETCH_ASSOC);
		if($busca){
                
                    foreach ($busca as $lista){
                ?>
                
                <tr class="responsive-table  highlight orange lighten-4">
                        <td><a href="editar_dados.php?id=<?php echo $lista["id"]; ?>" class="btn">Editar</a></td>
			<td><a href="deletar.php?id=<?php echo $lista["id"]; ?>" class="btn" onclick="return confirm('Confirmar exclusão de registro?');">Deletar</a></td>
                        <td><a href="imprimir.php?id=<?php echo $lista["id"]; ?>" class="btn" target="_blank">Imprimir</a></td>
			<td><?php echo $lista["id"]; ?></td>
			<td><?php echo $lista["tNome"]; ?></td>
			<td><?php echo $lista["tRg"]; ?></td>
			<td><?php echo $lista["tCpf"]; ?></td>
			<td><?php echo $lista["tMail"]; ?></td>
			<td><?php echo $lista["tSexo"]; ?></td>
			<td><?php echo $lista["input_fildeset_deficiencia"]; ?></td>
			<td><?php echo $lista["tQual"]; ?></td>
			<td><?php echo date("d/m/Y", strtotime($lista["tNasc"])); ?></td>
			<td><?php echo $lista["tNomeM"]; ?></td>
			<td><?php echo $lista["tTel"]; ?></td>
			<td><?php echo $lista["input_fildeset_laudo"]; ?></td>
			<td><?php echo $lista["input_fildeset_defasagem"]; ?></td>
			<td><?php echo $lista["tEscola"]; ?></td>
			<td><?php echo $lista["tSerie"]; ?></td>
			<td><?php echo $lista["input_fildeset_turno"]; ?></td>
			<td><?php echo $lista["tEspecificar"]; ?></td>
			<td><?php echo $lista["tDif"]; ?></td>
			<td><?php echo $lista["tNomeResp"]; ?></td>
			<td><?php echo $lista["tRgId"]; ?></td>
			<td><?php echo $lista["tCpfId"]; ?></td>
			<td><?php echo $lista["tRua"]; ?></td>
			<td><?php echo $lista["tNum"]; ?></td>
			<td><?php echo $lista["tCompl"]; ?></td>
			<td><?php echo $lista["tBairro"]; ?></td>
			<td><?php echo $lista["tCep"]; ?></td>
			<td><?php echo $lista["tRef"]; ?></td>
			<td><?php echo date("d/m/Y", strtotime($lista["tNasc2"])); ?></td>
			<td><?php echo $lista["tTel2"]; ?></td>
			<td><?php echo $lista["input_fildeset_dependencia"]; ?></td>
			<td><?php echo $lista["tQual2"]; ?></td>
			<td><?php echo $lista["tQuem"]; ?></td>
			<td><?php echo $lista["tRtrab"]; ?></td>
			<td><?php echo $lista["tNumM"]; ?></td>
			<td><?php echo $lista["tValor2"]; ?></td>
			<td><?php echo $lista["tPC"]; ?></td>
			<td><?php echo $lista["input_fildeset_beneficiario"]; ?></td>
			<td><?php echo $lista["tValor"]; ?></td>
			<td><?php echo $lista["tValor"]; ?></td>
			<td><?php echo $lista["tVinc"]; ?></td>
			<td><?php echo date("d/m/Y", strtotime($lista["tDN"])); ?></td>
			<td><?php echo $lista["tEsc"]; ?></td>
			<td><?php echo $lista["tOc"]; ?></td>
			<td><?php echo $lista["input_fildeset_tMoradia"]; ?></td>
			<td><?php echo $lista["tValor3"]; ?></td>
			<td><?php echo $lista["input_fildeset_tConstr"]; ?></td>
			<td><?php echo $lista["tAtv"]; ?></td>
			<td><?php echo $lista["tTr"]; ?></td>
			
		</tr>
                
                <?php 
                }//end foreach   
                         }//end if
                    }else{
                    
                $consulta=$pdo->prepare("select * from cadastro ORDER BY id desc");
		$consulta->execute();
		$armazena = $consulta->fetchAll(PDO::FETCH_ASSOC);
		foreach ($armazena as $dado){ ?>
		<tr class="responsive-table  highlight orange lighten-3">
                        <td><a href="editar_dados.php?id=<?php echo $dado["id"]; ?>" class="btn">Editar</a></td>
			<td><a href="deletar.php?id=<?php echo $dado["id"]; ?>" class="btn" onclick="return confirm('Confirmar exclusão de registro?');">Deletar</a></td>
			<td><a href="imprimir.php?id=<?php echo $dado["id"]; ?>" class="btn" target="_blank">Imprimir</a></td>
			<td><?php echo $dado["id"]; ?></td>
			<td><?php echo $dado["tNome"]; ?></td>
			<td><?php echo $dado["tRg"]; ?></td>
			<td><?php echo $dado["tCpf"]; ?></td>
			<td><?php echo $dado["tMail"]; ?></td>
			<td><?php echo $dado["tSexo"]; ?></td>
			<td><?php echo $dado["input_fildeset_deficiencia"]; ?></td>
			<td><?php echo $dado["tQual"]; ?></td>
			<td><?php echo date("d/m/Y", strtotime($dado["tNasc"])); ?></td>
			<td><?php echo $dado["tNomeM"]; ?></td>
			<td><?php echo $dado["tTel"]; ?></td>
			<td><?php echo $dado["input_fildeset_laudo"]; ?></td>
			<td><?php echo $dado["input_fildeset_defasagem"]; ?></td>
			<td><?php echo $dado["tEscola"]; ?></td>
			<td><?php echo $dado["tSerie"]; ?></td>
			<td><?php echo $dado["input_fildeset_turno"]; ?></td>
			<td><?php echo $dado["tEspecificar"]; ?></td>
			<td><?php echo $dado["tDif"]; ?></td>
			<td><?php echo $dado["tNomeResp"]; ?></td>
			<td><?php echo $dado["tRgId"]; ?></td>
			<td><?php echo $dado["tCpfId"]; ?></td>
			<td><?php echo $dado["tRua"]; ?></td>
			<td><?php echo $dado["tNum"]; ?></td>
			<td><?php echo $dado["tCompl"]; ?></td>
			<td><?php echo $dado["tBairro"]; ?></td>
			<td><?php echo $dado["tCep"]; ?></td>
			<td><?php echo $dado["tRef"]; ?></td>
			<td><?php echo date("d/m/Y", strtotime($dado["tNasc2"])); ?></td>
			<td><?php echo $dado["tTel2"]; ?></td>
			<td><?php echo $dado["input_fildeset_dependencia"]; ?></td>
			<td><?php echo $dado["tQual2"]; ?></td>
			<td><?php echo $dado["tQuem"]; ?></td>
			<td><?php echo $dado["tRtrab"]; ?></td>
			<td><?php echo $dado["tNumM"]; ?></td>
			<td><?php echo $dado["tValor2"]; ?></td>
			<td><?php echo $dado["tPC"]; ?></td>
			<td><?php echo $dado["input_fildeset_beneficiario"]; ?></td>
			<td><?php echo $dado["tValor"]; ?></td>
			<td><?php echo $dado["tValor"]; ?></td>
			<td><?php echo $dado["tVinc"]; ?></td>
			<td><?php echo date("d/m/Y", strtotime($dado["tDN"])); ?></td>
			<td><?php echo $dado["tEsc"]; ?></td>
			<td><?php echo $dado["tOc"]; ?></td>
			<td><?php echo $dado["input_fildeset_tMoradia"]; ?></td>
			<td><?php echo $dado["tValor3"]; ?></td>
			<td><?php echo $dado["input_fildeset_tConstr"]; ?></td>
			<td><?php echo $dado["tAtv"]; ?></td>
			<td><?php echo $dado["tTr"]; ?></td>
			
		</tr>
		<?php }} ?>

	</table>
</body>
</html><?php }else{ header('location:http://ongresgatandovidas.com/cadastro/');}?>