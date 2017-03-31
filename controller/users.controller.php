<?php
require_once 'model/user.model.php';
require_once '../../function-random/random.php';

class UsersController{

    private $users;

    public function __CONSTRUCT(){
        $this->users = new UserModel();
    }


    public function create(){
        $data = $_POST["data"];
        // Indice4 = id usuario
        // Indice5 = token
        // Indice6 = status

        $data[3] = password_hash($data[3], PASSWORD_DEFAULT);
        $data[4] = "USU-".date('Ymd').'-'.date('hms');
        $data[5] = randAlphanum(50);
        $data[6] = "Inactivo";

        // print_r($data);
        $response = $this->users->createUser($data);
        echo $response;

    }
}
?>
