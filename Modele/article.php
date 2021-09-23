<?php

class Article 			
{
	//Attributes
	 
	private $ida; // type : int
	private $etaba; // type : string
	private $typea; // type : formation, actu, inscription, ...
	private $utila; // type : string
	private $titrea;
	private $commentairea; // type : string
	private $voiea;
	private $datedebr;
	private $datefinr;

	private $lesRessources = array();

	//Operations

	function __construct(
		$ida="", 
		$etaba="", 
		$utila="", 
		$titrea="", 
		$voiea="", 
		$typea="", 
		$commentairea="", 
		$datedebr="", 
		$datefinr="")
	{
		$this->ida = $ida;
		$this->etaba = $etaba;
		$this->utila = $utila;
		$this->titrea = $titrea;
		$this->voiea = $voiea;
		$this->commentairea = $commentairea;
		$this->typea=$typea;
		$this->datedebr=$datedebr;
		$this->datefinr=$datefinr;
	}
	
	public function create()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "INSERT into article values (NULL,'".$this->etaba."','".$this->utila."','".$this->titrea."','".$this->voiea."','".$this->commentairea."','".$this->typea."','".$this->datedebr."','".$this->datefinr."');";

		$connStr->exec($req);
	}

	public function delete($ida)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "DELETE FROM article where IDA =".intval($ida).";";

		$connStr->exec($req) or die("Erreur de suppression de l'article.");

	}

	public function retrieve($condition)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM article WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->ida = $ligne["IDA"];
		$this->utila = $ligne["UTILA"];
		$this->titrea = $ligne["TITREA"];
		$this->voiea = $ligne["VOIEA"];
		$this->typea = $ligne["TYPEA"];
		$this->commentairea = $ligne["COMMENTAIREA"];
		$this->datedebr = $ligne["DATEDEBR"];
		$this->datefinr = $ligne["DATEFINR"];
		$this->etaba =  $ligne["ETABA"];
	}

	public function retrieveById($ida)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();
		
		$req = "SELECT * FROM article WHERE IDA = ".$ida;
		
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();
		
		$this->ida = $ligne["IDA"];
		$this->utila = $ligne["UTILA"];
		$this->titrea = $ligne["TITREA"];
		$this->voiea = $ligne["VOIEA"];
		$this->typea = $ligne["TYPEA"];
		$this->commentairea = $ligne["COMMENTAIREA"];
		$this->datedebr = $ligne["DATEDEBR"];
		$this->datefinr = $ligne["DATEFINR"];
		$this->etaba = $ligne["ETABA"];
	}

	public function findAll()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req="SELECT * FROM article";
		$lesarticles = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{
			$nouvelArticle = new Article($ligne['IDA'],
										$this->etaba,
										$ligne["UTILA"], 
										$ligne["TITREA"], 
										$ligne["VOIEA"], 
										$ligne["TYPEA"], 
										$ligne["COMMENTAIREA"], 
										$ligne["DATEDEBR"], 
										$ligne["DATEFINR"]);
			array_push($lesarticles, $nouvelArticle);
		}

		return $lesarticles;
	}

	public function update()
	{ 
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "UPDATE article set 
		etaba = '".$this->etaba."',
		titrea = '".$this->titrea."',
		utila = '".$this->utila."'
		typea = '".$this->typea."'
		voiea = '".$this->voiea."',
		commentairea = '".$this->commentairea."',
		datedebr = '".$this->datedebr."',
		datefinr = '".$this->datefinr."'
		where IDa = '".$ida."'";

		$connStr->exec($req);
	}

	public function numero()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT MAX(IDa) as MAX FROM article";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$nombre = $ligne["MAX"];
		echo $nombre;
		return $nombre;

	}

	public function findByEtab($etab) //Param : le num de l'établissement dont on veut les articles
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req="SELECT * FROM article WHERE etaba = '".$etab."';";

		$articles = array();

		$stmt = $connStr->query($req);

		while ($ligne = $stmt->fetch())
		{

			$nouvelArticle = new Article($ligne['IDA'], $etab, $ligne["UTILA"], $ligne["TITREA"], $ligne["VOIEA"], $ligne["TYPEA"], $ligne["COMMENTAIREA"], $ligne["DATEDEBR"], $ligne["DATEFINR"]);
			array_push($articles, $nouvelArticle);

		}

		return $articles;
	}

	public function findActu($etab=null)
	{ //Seulement les 7 premières actus pour la page d'accueil
		include_once "connexionBDD.php";
		$connStr = getBDD();
		if($etab!=null)
		{
			$req=	"SELECT *
				FROM article a inner join type t
				ON a.TYPEA = t.IDT
				WHERE ETABA = ".$etab."
				AND t.TYPE = 'actu'
				AND DATEFINR >= NOW()
				ORDER BY DATEDEBR DESC
				LIMIT 7;";
		} 
		else
		{
			$req=	"SELECT *
					FROM article a inner join type t
					ON a.TYPEA = t.IDT
					WHERE t.TYPE = 'actu'
					AND DATEFINR >= NOW()
					ORDER BY DATEDEBR DESC
					LIMIT 7;";
		}
		$lesarticlesActu = array();
		$stmt = $connStr->query($req);
		
		while ($ligne = $stmt->fetch())
		{
			$nouvelArticle = new Article($ligne['IDA'], $ligne['ETABA'], $ligne["UTILA"], $ligne["TITREA"], $ligne["VOIEA"], $ligne["TYPEA"], $ligne["COMMENTAIREA"], $ligne["DATEDEBR"], $ligne["DATEFINR"]);
			array_push($lesarticlesActu, $nouvelArticle);
		}
		
		return $lesarticlesActu;
	}
	public function findByType($type,$etab)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req =	"SELECT *
				FROM article a inner join type t
				ON a.TYPEA = t.IDT
				WHERE t.TYPE = lcase('".$type."')
				AND (DATEFINR >= NOW()
				OR DATEFINR = 0000-00-00)
				AND a.ETABA = '".$etab."'
				ORDER BY DATEDEBR DESC;";

		$lesarticles = array();
		$stmt = $connStr->query($req);
		
		while ($ligne = $stmt->fetch())
		{
			$nouvelArticle = new Article($ligne['IDA'], $ligne['ETABA'], $ligne["UTILA"], $ligne["TITREA"], $ligne["VOIEA"], $ligne["TYPEA"], $ligne["COMMENTAIREA"], $ligne["DATEDEBR"], $ligne["DATEFINR"]);
			array_push($lesarticles, $nouvelArticle);
		}
		
		return $lesarticles;
	}
	public function getLesRessources()
	{
		if(!empty($this->ida))
		{
			$this->lesRessources = $this->chercheLesRessources();
		}
		else
		{
			$this->lesRessources=NULL;
		}
		return $this->lesRessources;
	}
	
	public function chercheLesRessources()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$ressources = array();

		$req="SELECT * FROM `ressource` WHERE `ARTICLER` = ".$this->ida.";";
		
		$stmt = $connStr->query($req);
		
		while ($ligneR = $stmt->fetch())
		{
			include_once "ressource.php";

			$newRessource = new Ressource(
				$ligneR["IDR"],
				$ligneR["ARTICLER"],
				$ligneR["NOMR"],
				$ligneR["FORMATR"], 
				$ligneR["CHEMINR"], 
				$ligneR["POIDSR"]
			);

			array_push($ressources, $newRessource);
		}
		return $ressources;
	}

	
	public function getida()
	{
		return $this->ida;
	}

	public function getetaba()
	{
		return $this->etaba;
	}
	public function gettypea()
	{
		return $this->typea;
	}
	public function getutila()
	{
		return $this->utila;
	}
	public function gettitrea()
	{
		return $this->titrea;
	}
	public function getcommentairea()
	{
		return $this->commentairea;
	}
	public function getvoiea()
	{
		return $this->voiea;
	}

	public function setida($ida)
	{
		$this->ida=$ida;
	}
	public function setetaba($etaba)
	{
		$this->etaba=$etaba;
	}
	public function settypea($typea)
	{
		$this->typea=$typea;
	}
	public function setutila($utila)
	{
		$this->utila=$utila;
	}
	public function settitrea($titrea)
	{
		$this->titrea=$titrea;
	}
	public function setcommentairea($commentairea)
	{
		$this->commentairea=$commentairea;
	}
	public function setvoiea($voiea)
	{
		$this->voiea=$voiea;
	}
	public function getdatedebr()
	{
		return $this->datedebr;
	}
	public function setdatedebr($datedebr)
	{
		$this->datedebr=$datedebr;
	}
	public function getdatefinr()
	{
		return $this->datefinr;
	}
	public function setdatefinr($datefinr)
	{
		$this->datefinr=$datefinr;
	}
} // End Class article

?>

