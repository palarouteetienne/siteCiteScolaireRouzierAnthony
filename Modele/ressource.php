<?php

class Ressource 			
{
	//Attributes
		
	 
	//Attributs
	private $numeror;
	private $articler;
	private $nomr;
	private $formatr;
	private $cheminr;
	private $poidsr;

	//Méthodes
	//Constructeur
	function __construct($numeror="",$articler="", $nomr="", $formatr="", $cheminr="", $poidsr=0)
	{
		$this->NUMEROR = $numeror;
		$this->articler = $articler;
		$this->nomr = $nomr;
		$this->formatr = $formatr;
		$this->cheminr = $cheminr;
		$this->poidsr = $poidsr;
	}

	public function create()
	{
		include "connexionBDD.php";
		$req = "INSERT into ressource values (NULL,'"

			.$this->articler."',
			'".$this->nomr."','".$this->formatr."',
			'".$this->cheminr."','".$this->poidsr."');";
		$connStr->exec($req);
	}

	public function delete($NUMEROR)
	{
		include "connexionBDD.php";
		$req = "DELETE from ressource where NUMEROR =".$NUMEROR;
		$connStr->exec($req);

	}
	
	public function deleteParArticle($ida)
	{
		include "connexionBDD.php";
		$req = "DELETE from ressource where ARTICLER =".$ida;
		$connStr->exec($req);

	}
	
	public function retrieve($condition)
	{		
		include "connexionBDD.php";

		$req = "SELECT * FROM ressource WHERE ".$condition;

		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$this->NUMEROR= $ligne["NUMEROR"];

		$this->articler = new Article();
		$this->articler->retrieve("ida='".$ligne["article"]."'");
		
		$this->nomr = $ligne["nomr"];
		$this->formatr = $ligne["formatr"];
		$this->cheminr = $ligne["cheminr"];
		$this->poidsr = $ligne["poidsr"];
	}	

	public function numero()
	{
		include "connexionBDD.php";

		$req="SELECT MAX(NUMEROR) as MAX FROM ressource";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$numeroMAX = $ligne["MAX"];

		return $numeroMAX;

	}


	public function tailleTotale(){
		include "connexionBDD.php";

		$req="SELECT SUM(poidsr) as tailleTotale FROM ressource";
		$stmt = $connStr->query($req);
		$ligne = $stmt->fetch();

		$tailleTotale = ($ligne["tailleTotale"]/1024)/1024;

		return $tailleTotale;

	}
	public function getnumeror()
	{
		return $this->numeror;
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

	public function setnumeror($numeror)
	{
		$this->numeror=$numeror;
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

