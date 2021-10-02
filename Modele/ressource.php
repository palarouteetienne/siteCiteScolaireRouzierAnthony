<?php

class Ressource 			
{
	//Attributes
		
	 
	//Attributs
	private $IDR;
	private $articler;
	private $nomr;
	private $formatr;
	private $cheminr;
	private $poidsr;

	//Méthodes
	//Constructeur
	function __construct($IDR="",$articler="", $nomr="", $formatr="", $cheminr="", $poidsr=0)
	{
		$this->IDR = $IDR;
		$this->articler = $articler;
		$this->nomr = $nomr;
		$this->formatr = $formatr;
		$this->cheminr = $cheminr;
		$this->poidsr = $poidsr;
	}

	public function create()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "INSERT into ressource values (
			NULL,
			'".$this->articler."',
			'".$this->nomr."',
			'".$this->formatr."',
			'".$this->cheminr."',
			'".$this->poidsr."');";
			
		$connStr->exec($req);
	}

	public function delete($IDR)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "DELETE from ressource where IDR =".$IDR;
		$connStr->exec($req);

	}
	
	public function deleteParArticle($ida)
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();
		$req = "DELETE from ressource where ARTICLER =".$ida;
		$connStr->exec($req);

	}
	
	public function retrieve($condition)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM ressource WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->IDR= $ligne["IDR"];

		$this->articler = new Article();
		$this->articler->retrieve("ida='".$ligne["article"]."'");
		
		$this->nomr = $ligne["nomr"];
		$this->formatr = $ligne["formatr"];
		$this->cheminr = $ligne["cheminr"];
		$this->poidsr = $ligne["poidsr"];
	}

	public function retrieveById($id)
	{		
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req = "SELECT * FROM ressource WHERE IDR = '".$id."';";
		
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->IDR = $ligne["IDR"];

		$this->articler = new Article();
		$this->articler->retrieve("ida='".$ligne["ARTICLER"]."'");
		
		$this->nomr = $ligne["NOMR"];
		$this->formatr = $ligne["FORMATR"];
		$this->cheminr = $ligne["CHEMINR"];
		$this->poidsr = $ligne["POIDSR"];
	}	

	public function numero()
	{
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT MAX(IDR) as MAX FROM ressource";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$numeroMAX = $ligne["MAX"];

		return $numeroMAX;

	}


	public function tailleTotale(){
		include_once "connexionBDD.php";
		$connStr = getBDD();

		$req="SELECT SUM(poidsr) as tailleTotale FROM ressource";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$tailleTotale = ($ligne["tailleTotale"]/1024)/1024;

		return $tailleTotale;

	}
	public function getIDR()
	{
		return $this->IDR;
	}
	public function getarticler()
	{
		return $this->articler;
	}
	public function getnomr()
	{
		return $this->nomr;
	}
	public function getformatr()
	{
		return $this->formatr;
	}
	public function getcheminr()
	{
		return $this->cheminr;
	}
	public function getpoidsr()
	{
		return $this->poidsr;
	}
	public function getdatedebr()
	{
		return $this->datedebr;
	}
	public function getdatefinr()
	{
		return $this->datefinr;
	}

	public function setIDR($IDR)
	{
		$this->IDR=$IDR;
	}
	public function setarticler($articler)
	{
		$this->articler=$articler;
	}
	public function setnomr($nomr)
	{
		$this->nomr=$nomr;
	}
	public function setformatr($formatr)
	{
		$this->formatr=$formatr;
	}
	public function setcheminr($cheminr)
	{
		$this->cheminr=$cheminr;
	}
	public function setpoidsr($poidsr)
	{
		$this->poidsr=$poidsr;
	}
	public function setdatedebr($datedebr)
	{
		$this->datedebr=$datedebr;
	}
	public function setdatefinr($datefinr)
	{
		$this->datefinr=$datefinr;
	}

} // End Class Ressource

?>

