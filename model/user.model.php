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
	 ** CreateUser
	 ********************************************/
	 public function createUser($data){
		 try{

			 	$sql = "INSERT INTO users VALUES (?,?,?,?)";
				$query = $this->pdo->prepare($sql);
				$query->execute(array($data[4],$data[0],$data[1],$data[2]));

				$sql = "INSERT INTO access VALUES (?,?,?,0,?)";
				$query = $this->pdo->prepare($sql);
				$query->execute(array($data[5],$data[4],$data[3],$data[6]));

				}catch (PDOException $e) {
 					die($e->getMessage());
			  }

			 return "Guardo con exito";
		 }

		 /*********************************************
	 	 ** updateUser
	 	 ********************************************/
	 	 public function updateUserFail($data){
	 		 try{
				 	
	 			 	$sql = "UPDATE access SET acc_failed_att = (acc_failed_att + 1) WHERE user_id = (SELECT user_id FROM users WHERE user_email = ?) ";
	 				$query = $this->pdo->prepare($sql);
	 				$query->execute(array($data));
	 				}catch (PDOException $e) {
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
