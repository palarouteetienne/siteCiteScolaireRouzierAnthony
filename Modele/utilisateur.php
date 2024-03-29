<?php

class Utilisateur 			
{
	//Attributes

	private $idu; // type : int
	private $nomu; // type : string
	private $prenomu; // type : string
	private $mailu; // type : string
	private $mdpu; // type : string
<<<<<<< HEAD
	private $adminu; //Est-il admin ou pas ?
	
	private $lesetab = array();
	private $lesarticles = array();

	//Operations
	//Constructeur
	function __construct($idu="", $lesetab="", $nomu="", $prenomu="", $mailu="", $mdpu="",$adminu=false)
	{
		if($idu == "null")
		{
			$this->idu = $this->numero();
		}
		else
		{
			$this->idu = $idu;
		}
=======
	
	private $lesArticles;

	//Operations
	//Constructeur
	function __construct($idu=0,$nomu="", $prenomu="", $mailu="", $mdpu="")
	{
		$this->idu = $idu;
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
		$this->nomu = $nomu;
		$this->prenomu = $prenomu;
		$this->mailu = $mailu;
		$this->mdpu = $mdpu;
<<<<<<< HEAD
		$this->adminu = $adminu;
		if($lesetab!="")
		{
			$i = 0;
			foreach($lesetab as $et)
			{

				$this->lesetab[$i] = $et;
				$i++;
			}
		}
=======
		
	
		$this->lesArticles = array();
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
	}

	public function create()
	{
<<<<<<< HEAD
		$mailExiste = $this->verifmailexiste($this->mailu);

		if($mailExiste == true)
		{
			return false;
		}
		else
		{
			include_once "connexionBDD.php";
			$connStr = getBDD();

			if($this->adminu == '0')
			{
				$admin = false;
			}
			else
			{
				$admin = true;
			}
=======
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT INTO UTILISATEUR values ('".$this->idu."','".$this->nomu."','".$this->prenomu."','".$this->mailu."','".$this->mdpu."');";
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83

			$req = "INSERT INTO utilisateur values (".$this->idu.",'".$this->nomu."','".$this->prenomu."','".$this->mailu."','".$this->mdpu."','".$admin."');";

			$stmt = $connStr->query($req);
			if($stmt)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function createAsso()
	{
		include_once "Modele/connexionBDD.php";
		include_once "Modele/associe.php";
		
		$connStr = getBDD();
		
		$i = 0;
		foreach($this->lesetab as $et)
		{		
			$uneAsso = new Associe($this->getidu(),$et);
			$uneAsso->create();
			$i++;
		}

		return true;

	}

	public function delete($idu)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "DELETE from UTILISATEUR where idu =".$idu;
		$connStr->exec($req);

	}

	public function retrieve($condition)
<<<<<<< HEAD
	{
		//****************************************************************************/
		//Parfaitement Débile dans le cas où on a plusieurs enregistrements en réponse
		//Car seul le dernier enregistrement valorise les attributs ...
		//****************************************************************************/

		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM utilisateur WHERE ".$condition;
		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{
			$this->idu= $ligne["IDU"];
			$this->nomu = $ligne["NOMU"];
			$this->prenomu = $ligne["PRENOMU"];
			$this->mailu = $ligne["MAILU"];
			$this->mdpu = $ligne["MDPU"];
			$this->adminu = $ligne["ADMINU"];
		}

	}
	public function retrieveById($ide)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		
		$req = "SELECT * FROM utilisateur WHERE IDE = ".$ide;
		
		$stmt = $connStr->query($req);
		
		$ligne = $stmt->fetch();
	
		$this->idu= $ligne["IDU"];
		$this->nomu = $ligne["NOMU"];
		$this->prenomu = $ligne["PRENOMU"];
		$this->mailu = $ligne["MAILU"];
		$this->mdpu = $ligne["MDPU"];
		$this->adminu = $ligne["ADMINU"];
=======
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM utilisateur WHERE ".$condition;
		//var_dump($req);

		$stmt = $connStr->query($req);
		// var_dump($stmt);
		while ($ligne = $stmt->fetch())
		{
			$this->idu= $ligne["IDU"];
			$this->nomu = $ligne["NOMU"];
			$this->prenomu = $ligne["PRENOMU"];
			$this->mailu = $ligne["MAILU"];
			$this->mdpu = $ligne["MDPU"];
		}
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
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

<<<<<<< HEAD
			$newUtilisateur = new Utilisateur($ligne["IDU"], $ligne["NOMU"], $ligne["PRENOMU"], $ligne["MAILU"], $ligne["MDPU"], $ligne["ADMINU"]);
=======
			$newUtilisateur = new Utilisateur($ligne["IDU"], $ligne["NOMU"], $ligne["PRENOMU"], $ligne["MAILU"], $ligne["MDPU"]);
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83

			array_push($lesUtilisateurs, $newUtilisateur);
		}

		return $lesUtilisateurs;
	}

	private function numero()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT MAX(idu) as MAX FROM utilisateur";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$numero = $ligne["MAX"];

		return $numero + 1;

	}

	public function exist($condition){
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "SELECT * FROM utilisateur WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$utilRecup = new Utilisateur();
		if($ligne) 
		{
			$utilRecup->retrieve($condition);
			return $utilRecup;
		}
		else
		{
			return false;
		}
	}

	public function verifmailexiste($mail)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "SELECT * FROM utilisateur WHERE MAILU = '".$mail."'";

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		if($ligne)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function exist($condition){
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "SELECT * FROM utilisateur WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		if($ligne) {
			return new Utilisateur($ligne["IDU"], $ligne["NOMU"], $ligne["PRENOMU"], $ligne["MAILU"], $ligne["MDPU"]);
		}
		return false;
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
<<<<<<< HEAD
	public function getlesarticles()
	{
		return $this->lesarticles;
	}
	public function getlesetab()
=======
	public function getlesArticles()
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
	{
		return $this->lesetab;
	}
	public function getadminu()
	{
		return $this->adminu;
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
<<<<<<< HEAD
	public function setlesarticles()
	{
		//On place les articles de l'util de la BDD dans l'attribut lesart
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "SELECT IDE FROM article WHERE idu = ".$this->idu;

		$stmt = $connStr->query($req);
		$lesart = array();
		
		while ($ligne = $stmt->fetch())
		{
			$nouvart = new Etablissement();
			$nouvart->retrieveById($ligne[0]);
			array_push($lesart, $nouvart);
			var_dump($lesart);
		}
		$this->lesarticles=$lesarticles;
	}
	public function setlesetab()
=======
	public function setlesArticles($lesArticles)
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
	{
		//On place les etab de l'util de la BDD dans l'attribut lesetab
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "SELECT IDE FROM associe WHERE idu = ".$this->idu;
		
		$stmt = $connStr->query($req);
		$lesetab = array();
		
		while ($ligne = $stmt->fetch())
		{
			$nouvetab = new Etablissement();
			$nouvetab->retrieveById($ligne[0]);
			array_push($lesetab, $nouvetab);
		}
		$this->lesetab=$lesetab;
	}
} // End Class Utilisateur

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
