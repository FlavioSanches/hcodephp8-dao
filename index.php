<?php

require_once("config.php");

//$sql = new Sql();

//$usuario = $sql->select("SELECT * FROM tb_usuario");

//echo json_encode($usuario);


//Carrega um Usuario
//$root = new Usuario();

//$root->loadbyId(6);

//echo $root;

//carrega uma lista de usuario
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuario buscado pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("joao","6667");

echo $usuario;


?>