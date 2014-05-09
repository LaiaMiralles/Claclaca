<?php

class pregunta{
	private $id;
	private $enunciat;
	private $resposta;
	private $categoria;
	
	function __construct($id, $enunciat, $resposta, $categoria){
		$this->id = $id;
		$this->enunciat = $enunciat;
		$this->resposta = $resposta;
		$this->categoria = $categoria;		
	}
	public function getId(){
		return $this->id;
	}
	public function getEnunciat(){
		return $this->enunciat;
	}
	public function getResposta(){
		return $this->resposta;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setEnunciat($enunciat){
		$this->enunciat = $enunciat;
	}
	public function setResposta($resposta){
		$this->resposta = $resposta;
	}
	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}
}