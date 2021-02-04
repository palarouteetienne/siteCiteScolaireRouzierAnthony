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
    public function findAll()
	{
        include_once "connexionBDD.php";
		$connStr = getBDD();;
        
		$req="SELECT * FROM associe";
		$associe = array();

        $stmt = $connStr->query($req);
        
        while ($ligne = $stmt->fetch())
		{
            $newAssocie = new Associe
            (
                    $ligne["IDU"],
                    $ligne["IDE"]
            );
			array_push($associe, $newAssocie);
        }
        return $associe;
    }
    
    public function findAllBy($condition)
	{
		include_once "connexionBDD.php";
		include_once "etablissement.php";
		include_once "utilisateur.php";
		$connStr = getBDD();
        
		$req="SELECT * FROM associe WHERE ".$condition;
		
		$associe = array();

		$stmt = $connStr->query($req);

		$newUtilisateur = new Utilisateur();
		$newEtablissement = new Etablissement();

        while ($ligne = $stmt->fetch())
		{
			$newUtilisateur->retrieve("IDU=".$ligne['IDU']);
			$newEtablissement->retrieve("IDE=".$ligne['IDE']);

            $newAssocie = new Associe($newUtilisateur, $newEtablissement);
			array_push($associe, $newAssocie);
        }
        return $associe;
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

