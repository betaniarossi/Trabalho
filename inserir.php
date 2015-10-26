<?php
include('conexao.php');

$menu = $_POST['menu'];


if($menu == 1){ // cores

$descricao 		= $_POST['descricao'];



$stmt = $conexao->prepare("INSERT INTO cores (idCor, descricao) VALUES (null, ?)"); 
$stmt->bindParam(1, $descricao); 
$stmt->execute();



}else if($menu == 2){ // estampas

$descricao 		= $_POST['descricao'];



$stmt = $conexao->prepare("INSERT INTO estampas (idestampa, descricao) VALUES(null,?)"); 
$stmt->bindParam(1, $descricao); 
$stmt->execute();


}else if($menu == 3){ // modelo


$descricao 		= $_POST['descricao'];
$valor 	        = $_POST['valor'];
$cor                 = $_POST['cor'];
$estampa                  = $_POST['estampa'];




$stmt = $conexao->prepare("INSERT INTO modelos (idModelo, descricao, valor, cor, estampa) "
        . " VALUES (null, ?,?,?,?)"); 
$stmt->bindParam(1, $descricao); 
$stmt->bindParam(2, $valor); 
$stmt->bindParam(3, $cor); 
$stmt->bindParam(4, $estampa); 
$stmt->execute();


}else if($menu == 4){ // Clientes


$nome                       = $_POST['nome'];
$endereco                  = $_POST['endereco'];
$modelo                     = $_POST['modelo'];





$stmt = $conexao->prepare("INSERT INTO clientes (idCliente, nome, endereco, modelo) "
        . " VALUES (null, ?,?,?)"); 
$stmt->bindParam(1, $nome); 
$stmt->bindParam(2, $endereco); 
$stmt->bindParam(3, $modelo); 
$stmt->execute();

}

print_r($_POST);
die();


?>