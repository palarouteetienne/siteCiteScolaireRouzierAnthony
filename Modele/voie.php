<?php

class Voie 			
{
	//Attributes
		
	 
	private $idv; // type : int
	private $voie; // type : formation, actu, inscription, ...

	//Operations

	function __construct($idv="",$voie="")
	{
		$this->idv = $idv;
		$this->voie=$voie;
	}
	public function create()
	{
		include "connexionBDD.php";

		$req = "INSERT into voie values ('".$this->idv."','".$this->voie."');";

		$stmt = $connStr->query($req);
	}

	public function delete($idv)
	{
		include "connexionBDD.php";
		$req = "DELETE FROM voie where idv =".$idv;
		$connStr->exec($req);

	}

	public function retrieve($condition)
	{		
		include "connexionBDD.php";

		$req = "SELECT * FROM voie WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->idv = $ligne["IDV"];
		$this->voie = $ligne["VOIE"];

	}

	public function findAll()
	{
		include "connexionBDD.php";
		$req="SELECT * FROM voie";
		$lesVoies = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{
			$nouveauvoie = new voie($ligne['IDV'], $ligne["VOIE"]);
			array_push($lesVoies, $nouveauvoie);
		}

		return $lesVoies;
	}

	public function update($idv)
	{ 
		include "connexionBDD.php";

		$req = "UPDATE voie set 
		IDV = '".$this->idv."',
		VOIE = '".$this->voie."'
		where IDV = '".$idv."'";

		$connStr->exec($req);
	}

	public function numero()
	{
		include "connexionBDD.php";

		$req="SELECT MAX(IDV) as MAX FROM voie";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$nombre = $ligne["MAX"];

		return $nombre + 1;

    }
    public function getidv()
	{
		return $this->idv;
	}

	public function setidv($idv)
	{
		$this->idv=$idv;
    }

    public function getvoie()
	{
		return $this->voie;
	}

	public function setvoie($voie)
	{
		$this->voie=$voie;
	}

}