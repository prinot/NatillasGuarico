<?php

class deudasController extends Controllers {

  public function __construct() {
    parent::__construct(true);

        $obj = new Deudas;

        switch ($this->method) {
          case 'registrar':
          if($_POST) {
              $obj->crear();
              echo $this->template->render('producers/comprar');
          }else {
            echo $this->template->render('producers/registrar');
          }
          break;

          case 'deudas':
          if (1===1) {

            $p=$obj->litrossemanales();
            echo $this->template->render('deudas/deudas', array(
              'p' => $p
             ));

          }else {
            echo $this->template->render('deudas/deudas');
          }
          break;

          default:
          if(1==1) {


                        $p=$obj->litrossemanales();
                        echo $this->template->render('deudas/deudas', array(
                          'p' => $p
                         ));

          }else {
            echo $this->template->render('producers/comprar');
          }
          break;
        }
  }

}

?>
