<?php
require_once 'connexio.php';
class pregunta{
	private $id;
	private $enunciat;
	private $resposta_certa;
	private $resposta_falsa1;
	private $resposta_falsa2;
	private $resposta_falsa3;
	private $categoria;
	private $nivell;
	
	function __construct($id, $enunciat, $resposta_certa, $resposta_falsa1, $resposta_falsa2, $resposta_falsa3, $categoria, $nivell){
		$this->id = $id;
		$this->enunciat = $enunciat;
		$this->resposta_certa = $resposta_certa;
		$this->resposta_falsa1 = $resposta_falsa1;
		$this->resposta_falsa2 = $resposta_falsa2;
		$this->resposta_falsa3 = $resposta_falsa3;
		$this->categoria = $categoria;	
		$this->nivell = $nivell;
			
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
	public function getNumPreguntes(){ //retorna un arrai amb el número de preguntes de cada categoria
		$db = new connexio();
		$resultat1 = $db->query("SELECT * FROM categories");
		$num_categories = $resultat1->num_rows;
		
		
		for ($i = 1; $i <= $num_categories; $i++){
			$resultat = $db->query("SELECT COUNT(*) asd FROM preguntes WHERE categoria = $i");			
			//$arrai_numcategories[$i] = $resultat->num_rows;
			$fila = $resultat->fetch_array(MYSQLI_ASSOC);
			$arrai_numcategories[$i] = $fila['asd'];
		}
		return $arrai_numcategories;
	}
}