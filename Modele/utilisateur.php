<?php

class Utilisateur 			
{
	//Attributes
		
	 
	private $idu; // type : int
	private $nomu; // type : string
	private $prenomu; // type : string
	private $mailu; // type : string
	private $mdpu; // type : string
	private $etabu; // type : string
	//private $lesArticles;

	//Operations
	//Constructeur
	function __construct($nomu="", $prenomu="", $mailu="", $mdpu="", $etabu="", $lesArticles="")
	{
		$this->idu = $this->numero();
		$this->nomu = $nomu;
		$this->prenomu = $prenomu;
		$this->mailu = $mailu;
		$this->mdp = $mdpu;
		$this->etabu = $etabu;
	
		//$this->lesArticles = $lesArticles;
	}
	
	public function create()
	{
		include "connexionBDD.php";

		$req = "INSERT INTO UTILISATEUR values ('".$this->idu."','".$this->nomu."','".$this->prenomu."','".$this->mailu."','".$this->mdpu."','".$this->etabu."');";

		$stmt = $connStr->query($req);

	}

	public function delete($idu)
	{
		include "connexionBDD.php";
		$req = "DELETE from UTILISATEUR where idu =".$idu;
		$connStr->exec($req);

	}

	public function retrieve($condition)
	{		
		include "connexionBDD.php";

		$req = "SELECT * FROM UTILISATEUR WHERE ".$condition;
		
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->idu= $ligne["IDU"];
		$this->nomu = $ligne["NOMU"];
		$this->prenomu = $ligne["PRENOMU"];
		$this->mailu = $ligne["MAILU"];
		$this->mdpu = $ligne["MDPU"];
		$this->etabu = $ligne["ETABU"];
	}

	public function findAll()
	{
		include "connexionBDD.php";
		$req="SELECT * FROM UTILISATEUR";
		$lesUtilisateurs = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{

			$newUtilisateur = new Utilisateur($ligne["IDU"], $ligne["NOMU"], $ligne["PRENOMU"], $ligne["MAILU"], $ligne["MDPU"], $ligne["ETABU"]);

			array_push($lesUtilisateurs, $newUtilisateur);
		}

		return $lesUtilisateurs;
	}

	public function numero()
	{
		include "connexionBDD.php";

		$req="SELECT MAX(idu) as MAX FROM UTILISATEUR";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$nomubre = $ligne["MAX"];

		return $nomubre + 1;

	}

	public function getidu()
	{
		return $this->idu;
	}
	public function getnomu()
	{
		return $this->nomu;
	}
	public function getprenomu()
	{
		return $this->prenomu;
	}
	public function getmailu()
	{
		return $this->mailu;
	}
	public function getmdpu()
	{
		return $this->mdpu;
	}
	public function getetabu()
	{
		return $this->etabu;
	}
	public function getlesArticles()
	{
		return $this->lesArticles;
	}

	public function setidu($idu)
	{
		$this->idu=$idu;
	}
	public function setnomu($nomu)
	{
		$this->nomu=$nomu;
	}
	public function setprenomu($prenomu)
	{
		$this->prenomu=$prenomu;
	}
	public function setmailu($mailu)
	{
		$this->mailu=$mailu;
	}
	public function setmdpu($mdpu)
	{
		$this->mdpu=$mdpu;
	}
	public function setetabu($etabu)
	{
		$this->etabu=$etabu;
	}
	public function setlesArticles($lesArticles)
	{
		$this->lesArticles=$lesArticles;
	}

} // End Class Utilisateur

?>

