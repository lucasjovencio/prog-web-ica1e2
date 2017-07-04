<?php
#versao do encoding xml
$dom = new DOMDocument("1.0", "ISO-8859-1");

#retirar os espacos em branco
$dom->preserveWhiteSpace = false;

#gerar o codigo
$dom->formatOutput = true;

#criando o nó principal (root)
$root = $dom->createElement("cadastro");

#nó filho (contato)
$usuario = $dom->createElement("usuario");

#setanto nomes e atributos dos elementos xml (nós)
$nome = $dom->createElement("nome", "ADM");
$email = $dom->createElement("email", "adm@lunarscape.com.br");
$nomeusuario = $dom->createElement("nomeusuario", "adm");
$senha = $dom->createElement("senha", "123456789");
$id = $dom->createElement("id", "1");

#adiciona os nós (informacaoes do usuario) em usuario
$usuario->appendChild($nome);
$usuario->appendChild($email);
$usuario->appendChild($nomeusuario);
$usuario->appendChild($senha);
$usuario->appendChild($id);

#adiciona o nó usuario em (root) cadastro
$root->appendChild($usuario);
$dom->appendChild($root);

# Para salvar o arquivo, descomente a linha
$dom->save("cadastro.xml");

#cabeçalho da página
header("Content-Type: text/xml");
# imprime o xml na tela
print $dom->saveXML();
?>