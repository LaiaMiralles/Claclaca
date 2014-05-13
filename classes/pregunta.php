<?php
require_once 'connexio.php';
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
	public function getNumPreguntes(){ //retorna un arrai amb el número de preguntes de cada categoria
		$db = new connexio();//prova de ferho amb una select
		$resultat1 = $db->query("SELECT * FROM categories");
		$num_categories = $resultat1->num_rows;
		//var_dump($num_categories);
		
		for ($i = 1; $i <= $num_categories; $i++){
			$resultat = $db->query("SELECT COUNT(*) asd FROM preguntes WHERE categoria = $i");			
			//$arrai_numcategories[$i] = $resultat->num_rows;
			$fila = $resultat->fetch_array(MYSQLI_ASSOC);
			$arrai_numcategories[$i] = $fila['asd'];
		}
		return $arrai_numcategories;
	}
}