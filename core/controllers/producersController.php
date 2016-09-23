<?php

class producersController extends Controllers {

  public function __construct() {
    parent::__construct(true);


    $obj = new Producers;

    switch ($this->method) {
      case 'registrar':
      if($_POST) {
        $obj->crear();
        echo $this->template->render('producers/comprar');
      }else {
        echo $this->template->render('producers/registrar');
      }
      break;

      case 'producers':
      if (1===1) {

        $ml=$obj->mostrarleche();
        echo $this->template->render('producers/producers', array(
          'ml' =>$ml
        ));

         if (true) {
           $sumaleche=$obj->ObtenerLitrosSuma();

         }
      }else {
        echo $this->template->render('producers/producers');
      }
      break;

      default:

      if(1===1) {

        switch ($this->method) {
          case 'comprar':
          if (true) {
              $p=$obj->comprarlech();
            if (true) {

              echo $this->template->render('producers/comprar', array(
                'p' => $p
              ));
              if (true) {
                $obj->comprarleche();


              }
            }
          }


          break;

          default:
          echo $this->template->render('producers/producers');

          break;
        }



      }else {
        echo $this->template->render('producers/comprar');
      }
      break;
    }

  }
}
?>
