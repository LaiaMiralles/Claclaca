<?php

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
	
}