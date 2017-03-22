<?php

class UserModel{

	private $pdo;

	public function __CONSTRUCT(){
		try {
		  $this->pdo = DataBase::connect();
		  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

 /*********************************************
  ** ReadbyEmail
	** Se busca un usuario por medio del correo
	********************************************/

	public function readUserbyEmail($data){
			try{

				$sql = "SELECT users.user_id, user_name, user_lastname, acc_token, acc_pass FROM users INNER JOIN access ON access.user_id = users.user_id WHERE user_email = ?";
				$query = $this->pdo->prepare($sql);
				$query->execute(array($data[0]));
				$result = $query->fetch(PDO::FETCH_BOTH);

			}catch (PDOException $e) {
			die($e->getMessage());
		}

		return $result;
	}



	public function __DESTRUCT(){
	    DataBase::disconnect();
	}




}

?>
