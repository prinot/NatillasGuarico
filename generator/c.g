<?php

class {{controller}} extends Controllers {

  public function __construct() {
    parent::__construct(true);
    echo $this->template->render('{{view}}/{{view}}');
  }

}

?>
