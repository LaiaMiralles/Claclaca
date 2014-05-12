<?php
require_once ('classes/connexio.php');

class usuari{
	private $id;
	private $nom;
	private $cognoms;
	private $correu;
	private $password;
	private $nickname;
	private $max_puntuacio;
	private $rang;
	private $titol;
	
	function __construct($nom, $cognoms, $correu, $password, $nickname, $max_puntuacio, $rang, $titol){
		$this->nom = $nom;
		$this->cognoms = $cognoms;
		$this->correu = $correu;
		$this->password = $password;
		$this->nickname = $nickname;
		$this->max_puntuacio = $max_puntuacio;
		$this->rang = $rang;
		$this->titol = $titol;
	}	
	/*public function getAtributs(){
		$atributs = "Nom: ".$this->nom.". Cognoms: ".$this->cognoms.". Correu electrònic: ".$this->correu.". NickName: ".$this->nickname.". Màxima puntuació: ".$this->max_puntuacio.". Rang: ".$this->rang.". Títol: ".$this->titol;
		return $atributs;		
	}*/
	public function getId(){
		return $this->id;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getCognoms(){
		return $this->cognoms;
	}
	public function getCorreu(){
		return $this->correu;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getNickName(){
		return $this->nickname;
	}
	public function getMax_Puntuacio(){
		return $this->max_puntuacio;
	}
	public function getRang(){
		return $this->rang;
	}
	public function getTitol(){
		return $this->titol;
	} 		
	public function setPassword($password){
		$this->password = $password;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function registre(){
		$db = new connexio();
		$nom = $this->nom." ".$this->cognoms; 
		if ($resultat = $db->query("INSERT INTO usuaris (nom, correu, password, nickname) values ('$nom', '$this->correu', '$this->password', '$this->nickname')")){
			$id = $db->insert_id;
			echo "Usuari insertat";
			 
		}
		else {
			echo "Error funció insertar Classe Usuari: ", $db->error;
			$id = 0;
		}
		$db->close();
		return $id;
	}
	public function setRang($rang){
		$this->rang = $rang;
	}
	public function setTitol($titol){
		$this->titol = $titol;
	}
}
/*
class claclaquer extends usuari{
	
	function __construct(){
		parent::__construct($nom, $cognoms, $correu, $password, $nickname, $max_puntuacio, $rang, $titol);
	}
	public function enviarPregunta($pregunta){
		//implementar
	}
}

class admin extends usuari{
	function __construct(){
		parent::__construct($nom, $cognoms, $correu, $password, $nickname, $max_puntuacio, $rang, $titol);
	}
	public function ascendir($usuari, $rang){
		//implementar
	}
	public function banejar($usuari){
		//implementar
	}
	public function buscarPartida($id_partida){
		//implementar
	}
}
*/

?>