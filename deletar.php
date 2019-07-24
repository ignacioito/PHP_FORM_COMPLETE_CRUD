<?php
//Chama conexão com o Banco
include 'connect.php'; 

//Pega o id do cliente passado na URL
 $id= $_REQUEST["id"];

//SQL que Deleta o cadastro onde o id é igual ao da URL
 $sql_exclui_cliente=$pdo->prepare("Delete from cadastro where id='$id'");

//Executa o SQL acima
 $sql_exclui_cliente->execute();                                                                 

//Redireciona de volta para a lista de cadastros.     
 echo("<script type='text/javascript'> alert('Excluido com Sucesso'); window.location='listar.php';</script>");
 ?>