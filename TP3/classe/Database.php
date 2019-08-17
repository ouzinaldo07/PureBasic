<?php

	 
	/**
	 * 
	 */
	class Database
	{
		private $db;
		
		public function __construct($db_host = DB_HOST, $db_name = DB_NAME, $user_name = USER_NAME, $pwd = PWD)
		{
			try {
				$this->db = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $user_name, $pwd);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				die('Erreur'.$e->getMessage());
			}
		}

		public function getDB(){
			return $this->db;
		}

		public function addUser(Users $user){
			try {
				$q = $this->getDB()->prepare("INSERT INTO users VALUES(null, :nom, :prenom, :email, :tel, :login, :mdp, :profile, :status)");
				$resultat = $q->execute([
					'nom'=> $user->getNom(),
					'prenom'=> $user->getPrenom(),
					'email'=> $user->getEmail(),
					'tel'=> $user->getTel(),
					'login'=> $user->getLogin(),
					'mdp'=> $user->getMdp(),
					'profile'=> $user->getProfile(),
					'status' => $user->getStatus()
				]);
			} catch (PDOException $e) {
				message("La valeur du champs login est déjà existante");
			}

			return $resultat;
		}

		//cette methode permet de tester l'existance de login et le password dans la base
		public function userHasBeenExist($login, $mdp){
			
			$q = $this->getDB()->prepare('SELECT * from users WHERE login = :login AND mdp = :mdp');
				$q->execute([
					'login' => $login,
					'mdp' => $mdp
				]);

				$donnees = $q->fetch(PDO::FETCH_OBJ);

				return $donnees;

		}

		public function getAllUsers(){
			$q = $this->getDB()->prepare('SELECT * FROM users WHERE profile = "user" ');
			$q->execute();

			$data = $q->fetchAll(PDO::FETCH_OBJ);

			return $data;
		}

		public function updateUser($id){
			$q = $this->getDB()->prepare('UPDATE users SET status = "1" 
				WHERE id = :id');
			$result = $q->execute([
				'id' => $id
			]);

			return $result;
		}
	}
?>