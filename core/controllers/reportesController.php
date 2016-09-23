<?php

class reportesController extends Controllers {

  public function __construct() {
    parent::__construct(true);
    echo $this->template->render('reportes/reportes');
  }

}

?>
