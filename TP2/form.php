<?php
 class Formulaire
{ 
	public $username;
	public $password;
	public $entour='p';

	public function getUsername(){
		return $this->username;
	}
	public function setUsername($username){
		$this->username=$username;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password=$password;
	}
	public function __construct($username,$password)
	{
	    $this->username=$username;
	    $this->password=$password;

	}
	public function entour($html){
		
		return  "<{$this->entour}>{$html}</{$this->entour}>";
	}
	public function input($username){
         
           return $this->entour(" <input type='test' name='".$username."' value='". $username."' placeholder='nom utilisateur'>");
	}
	public function inpute($password){
   
           return $this->entour(" <input type='password' name='".$password."' value='".$password."' placeholder='mots de pass'>");
	}
	public function submit(){
		return "<button type='submit' name='valider' class='btn btn-danger'>envoyer</button>    ";        
	}

	public function reset(){
		return  "   <button type='reset' name='annuler' class='btn btn-info'>annuler</button>";
	}

	 // public function recuper_user($username){
	//	return isset($this->username['$username']) ? $this->username[$username]:null;
	// }
   //    public function recuper_pass($password){
	//	return isset($this->username['$password']) ? $this->username[$password]:null;
	//}

}


?>