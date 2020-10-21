<?php

require __DIR__ . "/Database.php";
/*
 * Classe Responsável por Manipular o registro de Cafés.
 *
 * @author Marcos Mathias Júnior <marcos.mth.jr@gmail.com>
 */

class Cafe extends Database
{

   private $name;
   private $description;
   public $table = 'catalogo';

   public function __construct()
   {
       parent::__construct();
   }

   public function cadastrar(array $data = []):bool
   {
       $sql_insert = "INSERT INTO {$this->table} (nome,descricao) VALUES(:nome,:descricao)";
       $stmt = $this->getConnection()->prepare($sql_insert);
       $stmt->bindValue(':nome',$data['nome']);
       $stmt->bindValue(':descricao',$data['descricao']);
       $store = $stmt->execute();

       return $store;
   }
}
