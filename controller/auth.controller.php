<?php
require_once 'model/user.model.php';

class AuthController{

    private $users;

    public function __CONSTRUCT(){
        $this->users = new UserModel();
    }

}
?>
