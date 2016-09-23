<?php

final class producers extends Models implements OCREND {

  public function __construct() {
    parent::__construct();
  }
// SELECT ".. WHERE fventa > curdate()-INTERVAL 7' day"
  final public function Foo(array $data) : array {
    # ...
    return array('success' => 0, 'message' => 'funcionando');
  }

  //metodo registar productor
  public function crear(){
    if (isset($_POST['nombre_productores'])) {
      $rp = array(
        'nombre_productores' => $_POST['nombre_productores'],
        'ced_productores' => $_POST['ced_productores'],
        'direccion_productores' => $_POST['direccion_productores'],
        'telefono_productores' => $_POST['telefono_productores']
      );
      $this->db->insert('productores', $rp);
    }else{

    }
  }

  //function buy milk

  final public function mostrarleche(){

    return $this->db->select('*','productores');

  }

  final public function comprarlech(){

    return $this->db->select('*','productores');
  }
  //function to buy milk
  final public function comprarleche(){
    if (isset($_POST['id_productor'])) {
      $rp = array(
        'id_productor' => $_POST['id_productor'],
        'ced_leche' => $_POST['id_productor'],
        'cantidad_leche' => $_POST['cantidad_leche']

      );
      $this->db->insert('leche', $rp);
    }else{

    }
  }

  //function of the table producers
  final   public function litrossemanales() {
    return $this->db->select('*','productores');
  }
  //funcion de listros semanales
  public function ObtenerLitrosSuma(){


  }


  public function __destruct() {
    parent::__destruct();
  }

}

?>
