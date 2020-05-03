<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");


echo json_encode($usuarios);
*/




// traz um usuario especifico 
/* 
$root = new Usuario();
$root->loadbyid(3);
echo $root;
*/

// carrega uma lista de usuario
/*
$lista = Usuario::getLista();
echo json_encode($lista);
*/

// carrega uma lista de usuarios buscando pelo login
/*
$search = usuario::search("jo");

echo json_encode($search)
*/

// carrega um usuario usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("root", "!@#$%");

echo $usuario;
*/

// criando um novo usuario
/*
$aluno = new Usuario("aluno", "@aluno");

$aluno->insert();

echo $aluno;
*/


$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "!@#$%");

echo $usuario;

?>