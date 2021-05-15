<?php

class Type 			
{
	//Attributes
		
	 
	private $idt; // type : int
	private $type; // type : formation, actu, inscription, ...

	//Operations

	function __construct($idt="",$type="")
	{
		$this->idt = $idt;
		$this->type=$type;
	}
	public function create()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT into type values ('".$this->idt."','".$this->type."');";

		$stmt = $connStr->query($req);
	}

	public function delete($idt)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "DELETE FROM type where IDT =".$idt;
		$connStr->exec($req);

	}

	public function retrieve($condition)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM type WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->idt = $ligne["IDT"];
		$this->type = $ligne["TYPE"];

	}

	public function findAll()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req="SELECT * FROM type";
		$lesTypes = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{
			$nouveauType = new Type($ligne['IDT'], $ligne["TYPE"]);
			array_push($lesTypes, $nouveauType);
		}

		return $lesTypes;
	}

	public function update($idt)
	{ 
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "UPDATE type set 
		IDT = '".$this->idt."',
		TYPE = '".$this->type."'
		where IDT = '".$idt."'";

		$connStr->exec($req);
	}

	public function numero()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT MAX(IDT) as MAX FROM type";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$nombre = $ligne["MAX"];

		return $nombre + 1;

    }
    public function getidt()
	{
		return $this->idt;
	}

	public function setidt($idt)
	{
		$this->idt=$idt;
    }

    public function gettype()
	{
		return $this->type;
	}

	public function settype($type)
	{
		$this->type=$type;
	}

}
?>