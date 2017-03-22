<?php
class ViewsController{

    public function main(){
      require_once 'view/include/header.php';
      
      if(!isset($_SESSION["user"])){
          require_once 'view/module/auth/index.php';
      }else{
          require_once 'view/dashboard.php';
      }

      require_once 'view/include/footer.php';
    }

}
?>
