<?php
//require_once 'pregunta.php';
require_once 'connexio.php';
class partida{
	private $id;
	private $id_usuari;
	private $puntuacio;
	private $ultima_pregunta;
	
	function __construct($id, $id_usuari, $puntuacio, $ultima_pregunta){
		$this->id = $id;
		$this->id_usuari = $id_usuari;
		$this->puntuacio = $puntuacio;
		$this->ultima_pregunta = $ultima_pregunta;		
	}
	public function getId(){
		return $this->id;
	}
	public function getIdUsuari(){
		return $this->id_usuari;
	}
	public function getPuntuacio(){
		return $this->puntuacio;
	}
	public function getUltimaPregunta(){
		return $this->ultima_pregunta;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setIdUsuari($idUsuari){
		$this->id_usuari = $idUsuari;
	}
	public function setPuntuacio($puntuacio){
		$this->puntuacio = $puntuacio;
	}
	public function setUltimaPregunta($num_pregunta){
		$this->ultima_pregunta = $num_pregunta;
	}
	public function guardar(){
		//implementar
	}
	public function carregar(){
		//implementar
	}
	public function novaPregunta($nivell){ //retorna una pregunta random del nivell demanat
		$db = new connexio();
		
		$resultat = $db->query("SELECT * FROM preguntes WHERE nivell_pregunta = $nivell order by rand() LIMIT 1");
		$fila = $resultat->fetch_array(MYSQLI_ASSOC);
		return $fila;
		
	}
	
}