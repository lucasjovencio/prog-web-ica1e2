<?php
Class Progresso{
    private $qtnAcessos;
    private $totalUsers;
    private $playfem;
    private $playhom;
    private $dom;
    private $root;
    private $user;
    function __construct(){
        $this->dadosXML();
        $this->startXML();
   }
   public function getQtnAc(){
       return $this->qtnAcessos;
   }
   public function getQtnUs(){
       return $this->totalUsers;
   }
   public function getQtnM(){
       return $this->playfem;
   }
   public function getQtnH(){
       return $this->playhom;
   }
   private function startXML(){
        $this->dom = new DOMDocument();
        $this->dom->preserveWhiteSpace = false;
        $this->dom->formatOutput = true;
        $this->root = $this->dom->createElement("progresso");
   }
   private function closeXML(){
        $this->root->appendChild($this->user);
        $this->dom->appendChild($this->root);
        $this->dom->save("progresso.xml");
   }

   public function userPlus(){
        $this->user = $this->addProgresso($this->dom, $this->qtnAcessos, $this->totalUsers+1,
                                          $this->playfem, $this->playhom);
        $this->closeXML();
   }
   public function acessoPlus(){
        $this->user = $this->addProgresso($this->dom, $this->qtnAcessos+1, $this->totalUsers,
                                          $this->playfem, $this->playhom);
        $this->closeXML();   
   }
   public function playfemPLus(){
        $this->user = $this->addProgresso($this->dom, $this->qtnAcessos, $this->totalUsers,
                                          $this->playfem+1, $this->playhom);
        $this->closeXML();
   }
   public function playhomPLus(){
        $this->user = $this->addProgresso($this->dom, $this->qtnAcessos, $this->totalUsers,
                                          $this->playfem, $this->playhom+1);
        $this->closeXML();
   }
   private function dadosXML(){
       $prog = simplexml_load_file("progresso.xml"); //carrega o arquivo XML e retornando um Array
       $this->qtnAcessos = (int)$prog->dados->qtnAcesso;
       $this->totalUsers = (int)$prog->dados->totalUsers;
       $this->playfem = (int)$prog->dados->playfem;
       $this->playhom = (int)$prog->dados->playhom;
   }
   private function addProgresso($document, $qtnAcesso, $totalUsers, $playfem,$playhom){
        #criar cadastro
        $cadastro = $document->createElement("dados");

        $qtnAcessoz = $document->createElement("qtnAcesso", $qtnAcesso);
        $totalUsersz = $document->createElement("totalUsers", $totalUsers);
        $playfemz = $document->createElement("playfem", $playfem);
        $playhomz = $document->createElement("playhom", $playhom);

        $cadastro->appendChild($qtnAcessoz);
        $cadastro->appendChild($totalUsersz);
        $cadastro->appendChild($playfemz);
        $cadastro->appendChild($playhomz);
        return $cadastro;
    }
    function __destruct() {
       $this->dom = NULL;
       $this->root = NULL;
    }
}
?>