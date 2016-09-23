<?php

final class Deudas extends Models implements OCREND {

  public function __construct() {
    parent::__construct();
  }

  final public function Foo(array $data) : array {
    # ...
    return array('success' => 0, 'message' => 'funcionando');
  }


    final   public function litrossemanales() {
      return $this->db->select('*','producers,milk','ced_producers=ced_milk');
   }
  public function __destruct() {
    parent::__destruct();
  }

}

?>
