<?php
class Associe 			
{
	
	//Attributs
	private $idu;
	private $ide;

	//Constructeur
	function __construct($idu=null,$ide=null)
	{
		$this->idu = $idu;
		$this->ide = $ide;
	}

	//Méthodes

	public function create()
	{

		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT into associe values ('".$this->idu."','".$this->ide."');";

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
            $newAssocie = new Associe($ligne["idu"],$ligne["ide"]);
			array_push($lesAssocies, $newAssocie);
        }
		var_dump($lesAssocies);
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
            $newAssocie = new Associe($ligne['IDU'], $ligne['IDE']);
			array_push($lesAssocies, $newAssocie);
        }
        return $lesAssocies;
    }

	public function findAllObjBy($condition)
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

	public function getide()
	{
		return $this->ide;
    }
    
	public function getidu()
	{
		return $this->idu;
	}
	
	public function setide($ide)
	{
		$this->ide=$ide;
	}
    
    public function setidu($idu)
	{
		$this->idu=$idu;
	}

} // End Class Associe

?>