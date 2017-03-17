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

	public function createUser($data){

		try {


			$sql = "INSERT INTO users VALUES ('',?,?,?,?,?)";
			$query = $this->pdo->prepare($sql);

			$query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4]));
			$msn = "Usuario guardado con exito";

		} catch (PDOException $e) {
			$msn = $e->getMessage();
		}

		return $msn;
	}

	// CONSULTAMOS TODOS LOS USUARIOS DE LA BASE DE DATOS

	public function readUsers(){

		try {

			$sql = "SELECT * FROM users";
			$query = $this->pdo->prepare($sql);

			$query->execute();

			$result = $query->fetchALL(PDO::FETCH_BOTH);

		} catch (PDOException $e) {
			die($e->getMessage());
		}

		return $result;
	}

public function readUserbyId($data){

		try {

			$sql = "SELECT * FROM users WHERE user_cod = ?";
			$query = $this->pdo->prepare($sql);

			$query->execute(array($data));

			$result = $query->fetch(PDO::FETCH_BOTH);

		} catch (PDOException $e) {
			die($e->getMessage());
		}

		return $result;
	}

	public function updateUser($data){

		try {

			$sql = "UPDATE users SET user_name = ?, user_type_dni = ?, user_dni = ?, user_mail = ?, user_pass = ? WHERE user_cod = ?";
			$query = $this->pdo->prepare($sql);

			$query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]));
			$msn = "el usuario se modifico con exito";

		} catch (PDOException $e) {
			$msn = $e->getMessage();
		}

		return $msn;
	}


		// ELIMINANDO UN USUARIO
	public function deleteUser($data){

		try {

			$sql = "DELETE FROM users WHERE user_cod = ?";
			$query = $this->pdo->prepare($sql);

			$query->execute(array($data));
			$msn = "Usuario eliminado con exito";

		} catch (PDOException $e) {
			$msn = $e->getMessage();
		}

		return $msn;
	}


	public function __DESTRUCT(){
	    DataBase::disconnect();
	}




}

?>
