<?php
require_once 'model/user.model.php';

class AuthController{

    private $users;

    public function __CONSTRUCT(){
        $this->users = new UserModel();
    }

    // Metodo para autenticar y validar el usuario (el usuario debe estar en la base de datos)
    public function userAuth(){
      $data = $_POST["data"];
      print_r($data);
    }
}
?>
