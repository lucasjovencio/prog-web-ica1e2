<?php
function addContato($document, $nome, $email, $nomeusuario,$senha,$id)
{
	#criar cadastro
	$cadastro = $document->createElement("usuario");


	$nomez = $document->createElement("nome", $nome);
	$emailz = $document->createElement("email", $email);
	$nomeusuarioz = $document->createElement("nomeusuario", $nomeusuario);
	$senhaz = $document->createElement("senha", $senha);
	$idz = $document->createElement("id", $id);

	$cadastro->appendChild($nomez);
	$cadastro->appendChild($emailz);
	$cadastro->appendChild($nomeusuarioz);
	$cadastro->appendChild($senhaz);
	$cadastro->appendChild($idz);
	return $cadastro;
}


	$userNome = 	$_POST['nome'];
	$username = 	$_POST['nomeuser'];
	$email = 		$_POST['email'];
	$confemail = 	$_POST['confemail'];
	$senha = 		$_POST['senha'];
	$confsenha = 	$_POST['confsenha'];

	$dom = new DOMDocument();
	
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;

	$root = $dom->createElement("cadastro");

	#utilizando a funcao para criar contatos
	$user = addContato($dom, $userNome, $email, $username,$senha,1);

	#adicionando no root

	$root->appendChild($user);
	$dom->appendChild($root);

	#salvando o arquivo
	$dom->save("cadastro.xml");

	#mostrar dados na tela
	header("Content-Type: text/xml");
	print $dom->saveXML();


?>