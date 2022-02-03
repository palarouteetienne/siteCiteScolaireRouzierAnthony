<?php

class Etablissement 			
{
	//Attributes
	 
	private $IDE; // type : int
	private $nomE; // type : string
	private $rueE; // type : string
	private $codePostalE; // type : int
	private $villeE; // type : string
	private $telephoneE; // type : int
	private $emailE;
	private $motProviseur; // type : string
	private $lesarticles = array(); //Pour les articles d'un établissement
	private $lesvoies = array(); //Liste des voies concernées par les articles de cet établissement

	//Operations
	//Constructeur
	function __construct($IDE="", $nomE="", $rueE="", $codePostalE=0, $villeE="", $telephoneE=0, $emailE = "", $motProviseur="")
	{
		$this->IDE = $IDE;
		$this->nomE = $nomE;
		$this->rueE = $rueE;
		$this->codePostalE = $codePostalE;
		$this->villeE = $villeE;
		$this->telephoneE = $telephoneE;
		$this->emailE = $emailE;
		$this->motProviseur = $motProviseur;
	}

	public function create()
	{
		echo "create Etablissement";
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT into etablissement values ('".$this->IDE."','".$this->nomE."','".$this->rueE."','".$this->codePostalE."','".$this->villeE."','".$this->telephoneE."','".$this->emailE."','".$this->motProviseur."', '".$this->$lesarticles."');";

		$stmt = $connStr->query($req);
	}

	public function delete($IDE)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "DELETE from etablissement where IDE =".$IDE;
		$connStr->exec($req);
	}

	public function retrieve($condition)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM etablissement WHERE ".$condition;

		$stmt = $connStr->query($req);
		
		while ($ligne = $stmt->fetch()) 
		{
			$this->IDE= $ligne["IDE"];
			$this->nomE = $ligne["NOME"];
			$this->rueE = $ligne["RUEE"];
			$this->codePostalE = $ligne["CODEPOSTALE"];
			$this->villeE = $ligne["VILLEE"];
			$this->telephoneE = $ligne["TELEPHONEE"];
			$this->emailE = $ligne["EMAILE"];
			$this->motProviseur = $ligne["MOTPROVISEUR"];
		}
	}
	public function retrieveById($ide)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		
		$req = "SELECT * FROM etablissement WHERE IDE = ".$ide;
		
		$stmt = $connStr->query($req);
		
		$ligne = $stmt->fetch();
		
		$this->IDE= $ligne["IDE"];
		$this->nomE = $ligne["NOME"];
		$this->rueE = $ligne["RUEE"];
		$this->codePostalE = $ligne["CODEPOSTALE"];
		$this->villeE = $ligne["VILLEE"];
		$this->telephoneE = $ligne["TELEPHONEE"];
		$this->emailE = $ligne["EMAILE"];
		$this->motProviseur = $ligne["MOTPROVISEUR"];

	}
	public function findAll()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req="SELECT * FROM etablissement";
		$lesEtablissements = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{

			$newEtablissement = new Etablissement($ligne["IDE"],$ligne["NOME"], $ligne["RUEE"], $ligne["CODEPOSTALE"], $ligne["VILLEE"], $ligne["TELEPHONEE"], $ligne["EMAILE"], $ligne["MOTPROVISEUR"]);

			array_push($lesEtablissements, $newEtablissement);
		}

		return $lesEtablissements;
	}

	public function update($IDE)
	{ 
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "UPDATE etablissement set
		NOME = '".$this->nomE."',
		RUEE = '".$this->rueE."',
		CODEPOSTALE = '".$this->codePostalE."',
		VILLEE = '".$this->villeE."',
		TELEPHONEE = '".$this->telephoneE."',
		EMAILE = '".$this->emailE."',
		MOTPROVISEUR = '".$this->motProviseur."'
		where IDE = '".$IDE."'";

		$connStr->exec($req);
	}

	public function numero()
	{

		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT MAX(IDE) as MAX FROM etablissement";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$nombre = $ligne["MAX"];

		return $nombre + 1;

	}
	public function getlesvoies() //Retourne une collection de voies
	{
		include_once "connexionBDD.php";
		include_once "Modele/voie.php";
		$connStr = getBDD();

		$req = 'SELECT DISTINCT IDV,VOIE
		FROM article
		INNER JOIN voie
		ON VOIEA = IDV
		WHERE ETABA ='.$this->IDE.';';

		$stmt = $connStr->query($req);
		while ($ligne = $stmt->fetch())
		{
			$nouvVoie = new Voie($ligne["IDV"],$ligne["VOIE"]);
			array_push($this->lesvoies, $nouvVoie);
		}

		return $this->lesvoies;
	}
	public function getIDE()
	{
		return $this->IDE;
	}
	public function getNomE()
	{
		return $this->nomE;
	}
	public function getrueE()
	{
		return $this->rueE;
	}
	public function getcodePostalE()
	{
		return $this->codePostalE;
	}
	public function getvilleE()
	{
		return $this->villeE;
	}
	public function getEmailE()
	{
		return $this->emailE;
	}
	public function gettelephoneE()
	{
		return $this->telephoneE;
	}
	public function getmotProviseur()
	{
		return $this->motProviseur;
	}
	public function getLesArticles()
	{
		if(!empty($this->IDE))
		{
			$this->lesarticles = $this->rechercheArticlesetab(); //Pour les articles d'un établissement
		}
		else
		{
			$this->lesarticles = NULL;
		}
		return $this->lesarticles;
	}

	public function getLesArticlesDeType($typeArt)
	{
	
		include_once "connexionBDD.php";
		include_once "article.php";
		
		$connStr = getBDD();
		$articles = array();

		$req="SELECT * 
		FROM article
		INNER JOIN type
		ON TYPEA = IDT
		WHERE etaba = :etablissement
		AND TYPE = :type;";

		$stmt = $connStr->prepare($req, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$stmt->execute(array(':etablissement' => $this->IDE, ':type' => $typeArt));

		foreach($stmt as $enr)
		{
			$nouvelArticle = new Article($enr["IDA"], $enr["ETABA"], $enr["UTILA"], $enr["TITREA"], $enr["VOIEA"], $enr["TYPEA"], $enr["COMMENTAIREA"], $enr["DATEDEBR"], $enr["DATEFINR"]);
			array_push($this->lesarticles, $nouvelArticle);

		}
		return $this->lesarticles;
	}
	public function rechercheArticlesetab()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		include "article.php";
		
		$articles = array();
		
		$req="SELECT * FROM article WHERE etaba = ".$this->IDE;

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{

			$nouvelArticle = new Article($ligne["IDA"], $ligne["ETABA"], $ligne["UTILA"], $ligne["TITREA"], $ligne["VOIEA"], $ligne["TYPEA"], $ligne["COMMENTAIREA"], $ligne["DATEDEBR"], $ligne["DATEFINR"]);
			array_push($articles, $nouvelArticle);

		}
		return $articles;
	}

	public function setIDE($IDE)
	{
		$this->IDE=$IDE;
	}
	public function setnomE($nomE)
	{
		$this->nomE=$nomE;
	}
	public function setrueE($rueE)
	{
		$this->rueE=$rueE;
	}
	public function setcodePostalE($codePostalE)
	{
		$this->codePostalE=$codePostalE;
	}
	public function setvilleE($villeE)
	{
		$this->villeE=$villeE;
	}
	public function setEmailE($emailE)
	{
		$this->emailE=$emailE;
	}
	public function settelephoneE($telephoneE)
	{
		$this->telephoneE=$telephoneE;
	}
	public function setmotProviseur($motProviseur)
	{
		$this->motProviseur=$motProviseur;
	}	
} // End Class Etablissement

?>