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
				$q = $this->getDB()->prepare("INSERT INTO users VALUES(null, :nom, :prenom, :email, :tel, :login, :mdp)");
				$resultat = $q->execute([
					'nom'=> $user->getNom(),
					'prenom'=> $user->getPrenom(),
					'email'=> $user->getEmail(),
					'tel'=> $user->getTel(),
					'login'=> $user->getLogin(),
					'mdp'=> $user->getMdp()
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
	public function addPub(pub $pub){
		$p=$this->getDB()->prepare("INSERT INTO pubs Values(null, :id_user, :titre, :pub)");
		$resultat = $p->execute(['id_user'=>$pub->getId_user(),'titre'=>$pub->getTitre(),'pub'=>$pub->getPub()]);
		return $resultat;
	}
	public function getAllPub(){
		$p=$this->getDB()->prepare("SELECT titre,pub,nom from users,pubs where users.id=pubs.id_user order by pubs.id desc");
		$resultat=$p->execute();
		$val=$resultat->fetchAll(PDO::FETCH_OBJ);
		return $val;
	}
}
?>