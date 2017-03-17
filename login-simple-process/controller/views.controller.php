<?php
class ViewsController{

    public function main(){
      require_once 'view/include/header.php';
      require_once 'view/module/auth/index.php';
      require_once 'view/include/footer.php';
    }

}
?>
