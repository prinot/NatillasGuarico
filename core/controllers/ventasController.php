<?php

class ventasController extends Controllers {

  public function __construct() {
    parent::__construct(true);


    $obj = new Ventas;

    switch ($this->method) {
      case 'ventastotal':

      break;

      case 'semanales':
      # code...
      break;

      case 'mensuales':
      # code...
      break;

      default:
      $vs=$obj->ventasintervalo();
      echo $this->template->render('ventas/ventas', array(
        'vs' =>$vs
      ));
      break;
    }



  }

}

?>
