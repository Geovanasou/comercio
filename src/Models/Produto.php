<?php

namespace src\Models;

class Produto {

   private $id;
   private $nome;
   private $descricao;

   public function getid(){
       return $this->id;
   }
   public function setid($id){
       $this->id = $id;
   }

   public function setNome($nome){
    $this->nome = $nome;
}

public function getNome(){
    return $this->nome ;
}

public function setDescricao($descricao){
    $this->descricao = $descricao;
}
public function getDescricao(){
   return  $this->descricao ;
}
}