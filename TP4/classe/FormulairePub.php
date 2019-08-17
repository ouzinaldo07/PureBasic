<?php


public class pub{
	private $id;
	private $titre;
	private $date;


	function __construct($id,$titre,$date){
		$this->setId($id);
		$this->setTitre($titre);
		$this->setDate($date);
	}
	//les setters
	    public function setId($id){$this->id = $id;}
		public function setTitre($titre){$this->titre = $titre;}
		public function setDate($date){$this->date = $date;}
	//les getters
		public function getId(){return $this->id;}
		public function getTitre(){return $this->titre ;}
		public function getDate(){return $this->date ;}
}
?>