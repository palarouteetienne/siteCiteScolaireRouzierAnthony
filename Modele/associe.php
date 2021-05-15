<?php
class Associe 			
{
	
	//Attributs
	private $IDU;
	private $IDE;

	//Constructeur
	function __construct($IDU=null,$IDE=null)
	{
		$this->IDU = $IDU;
		$this->IDE = $IDE;
	}

	//Méthodes

	public function create()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT into associe values ('".$this->IDU = $IDU."';'".$this->IDE."');";
		$stmt = $connStr->query($req);
		return true;

	}
	
    public function findAll()
	{
        include_once "connexionBDD.php";
		$connStr = getBDD();
        
		$req="SELECT * FROM associe";
		$lesAssocies = array();

        $stmt = $connStr->query($req);
        
        while ($ligne = $stmt->fetch())
		{
            $newAssocie = new Associe($ligne["IDU"],$ligne["IDE"]);
			array_push($lesAssocies, $newAssocie);
        }
        return $lesAssocies;
    }
    
    public function findAllBy($condition)
	{
		include_once "connexionBDD.php";
		include_once "etablissement.php";
		include_once "utilisateur.php";
		$connStr = getBDD();
        
		$req="SELECT * FROM associe WHERE ".$condition;
		
		$lesAssocies = array();

		$stmt = $connStr->query($req);


        while ($ligne = $stmt->fetch())
		{
			$newUtilisateur = new Utilisateur();
			$newUtilisateur->retrieve("IDU=".$ligne['IDU']);

			$newEtablissement = new Etablissement();
			$newEtablissement->retrieve("IDE=".$ligne['IDE']);

            $newAssocie = new Associe($newUtilisateur, $newEtablissement);
			array_push($lesAssocies, $newAssocie);
        }
        return $lesAssocies;
    }

	public function getIDE()
	{
		return $this->IDE;
    }
    
	public function getIDU()
	{
		return $this->IDU;
	}
	
	public function setIDE($IDE)
	{
		$this->IDE=$IDE;
	}
    
    public function setIDU($IDU)
	{
		$this->IDU=$IDU;
	}

} // End Class Associe

?>