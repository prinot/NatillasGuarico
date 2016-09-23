  <?php

  final class Ventas extends Models implements OCREND {

    public function __construct() {
      parent::__construct();
    }


      final public function ventassemanles(){

        return $this->db->query('SELECT creado_leche,id_productor,id_productores,cantidad_leche,nombre_productores, telefono_productores FROM leche,productores WHERE id_productor=36 AND id_productores=36');

      }

      final public function  ventasintervalo()
      {


  $desde = $_POST['desde'];
  $hasta = $_POST['hasta'];

  //COMPROBAMOS QUE LAS FECHAS EXISTAN
  if(isset($desde)==false){
    $desde = $hasta;
  }

  if(isset($hasta)==false){
    $hasta = $desde;
  }
        return $this->db->query('SELECT id_leche,creado_leche, cantidad_leche,nombre_productores,ced_productores FROM productores,leche WHERE creado_leche ');
      }


    final public function Foo(array $data) : array {
      # ...
      return array('success' => 0, 'message' => 'funcionando');
    }

    public function __destruct() {
      parent::__destruct();
    }

  }

  ?>
