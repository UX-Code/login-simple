<?php
class ViewsController{

    public function inicio(){
      require_once 'view/include/header.php';
      require_once 'view/module/auth/index.php';
      require_once 'view/include/footer.php';
    }

}
?>
