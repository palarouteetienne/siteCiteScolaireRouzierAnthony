<?php

class Utilisateur 			
{
	//Attributes
		
	 
	private $idu; // type : int
	private $etabu; // type : string
	private $nomu; // type : string
	private $prenomu; // type : string
	private $mailu; // type : string
	private $mdpu; // type : string
	
	private $lesarticles;

	//Operations
	//Constructeur
	function __construct($idu=0, $etabu="",$nomu="", $prenomu="", $mailu="", $mdpu="")
	{
		$this->idu = $idu;
		$this->etabu = $etabu;
		$this->nomu = $nomu;
		$this->prenomu = $prenomu;
		$this->mailu = $mailu;
		$this->mdpu = $mdpu;
		
	
		$this->lesarticles = array();
	}
	
	public function create()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT INTO UTILISATEUR values ('".$this->idu."','".$this->nomu."','".$this->prenomu."','".$this->mailu."','".$this->mdpu."','".$this->etabu."');";

		$stmt = $connStr->query($req);

	}

	public function delete($idu)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "DELETE from UTILISATEUR where idu =".$idu;
		$connStr->exec($req);

	}

	public function retrieve($condition)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM utilisateur WHERE ".$condition;


		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{
			$this->idu = $ligne["IDU"];
			$this->nomu = $ligne["NOMU"];
			$this->prenomu = $ligne["PRENOMU"];
			$this->mailu = $ligne["MAILU"];
			$this->mdpu = $ligne["MDPU"];
			$this->etabu = $ligne["ETABU"];
		}
	}
public function retrieveByMail($mail)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM utilisateur WHERE MAILU = :mailu";
		$stmt = $dbh->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$stmt->execute(array(':mailu' => $mail));

		while ($ligne = $stmt->fetch())
		{
			$this->idu = $ligne["IDU"];
			$this->nomu = $ligne["NOMU"];
			$this->prenomu = $ligne["PRENOMU"];
			$this->mailu = $ligne["MAILU"];
			$this->mdpu = $ligne["MDPU"];
			$this->etabu = $ligne["ETABU"];
		}
	}
	public function findAll()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req="SELECT * FROM UTILISATEUR";
		$lesUtilisateurs = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{

			$newUtilisateur = new Utilisateur($ligne["IDU"], $ligne["NOMU"], $ligne["PRENOMU"], $ligne["MAILU"], $ligne["MDPU"], $ligne["ADMIN"]);

			array_push($lesUtilisateurs, $newUtilisateur);
		}

		return $lesUtilisateurs;
	}

	public function numero()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT MAX(idu) as MAX FROM utilisateur";
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
	public function getlesarticles()
	{
		return $this->lesarticles;
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
	public function setlesarticles($lesarticles)
	{
		$this->lesarticles=$lesarticles;
	}

} // End Class Utilisateur

?>

