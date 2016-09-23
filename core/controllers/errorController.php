<?php

class errorController extends Controllers {

  public function __construct() {
    parent::__construct(true);
    echo $this->template->render('error/error',array('controller' => $this->route->getController()));
  }

}

?>
