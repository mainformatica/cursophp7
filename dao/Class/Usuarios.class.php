<?php

class Usuarios {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($Value){

		$this->idusuario = $Value;
	}

	public function getDeslogin(){

		return $this->deslogin;
	}

	public function setDeslogin($Value){

		$this->deslogin = $Value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($Value){
		$this->dessenha = $Value;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($Value){
		$this->dtcadastro = $Value;
	}

	public function loadById ($id){

		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
          ":ID"=>$id));

		if (count($results) > 0){
			$row = $results[0];
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}

	public function __toString(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));
	}

	
}



?>