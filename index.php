<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql -> select("select * from tb_usuarios");

//echo json_encode($usuarios)

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

//Criando um novo usuário
//$aluno->insert();
//echo $aluno;


//Alterar um usuário
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;

//Deletar um usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
 ?>