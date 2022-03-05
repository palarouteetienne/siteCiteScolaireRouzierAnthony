<<<<<<< HEAD
<?php

class Possede 			
{
	
	//Attributs
	private $idu;
	private $ide;

	
	//Constructeur
	function __construct($idu="",$ide="")
	{
		$this->idu = $idu;
		$this->ide = $ide;
	}

    //Méthodes
    public function findAll()
	{
        include_once "connexionBDD.php";
		$connStr = getBDD();
        
		$req="SELECT * FROM possede";
		$possede = array();

        $stmt = $connStr->query($req);
        
        while ($ligne = $stmt->fetch())
		{
            $newPossede = new Possede
            (
                    $ligne["idu"],
                    $ligne["ide"]
            );
			array_push($possede, $newPossede);
        }
        return $possede;
       
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

} // End Class Possede

?>

=======
<?php

class Possede 			
{
	
	//Attributs
	private $IDU;
	private $IDE;

	
	//Constructeur
	function __construct($IDU="",$IDE="")
	{
		$this->IDU = $IDU;
		$this->IDE = $IDE;
	}

    //Méthodes
    public function findAll()
	{
        include_once "connexionBDD.php";
		$connStr = getBDD();;
        
		$req="SELECT * FROM possede";
		$possede = array();

        $stmt = $connStr->query($req);
        
        while ($ligne = $stmt->fetch())
		{
            $newPossede = new Possede
            (
                    $ligne["IDU"],
                    $ligne["IDE"]
            );
			array_push($possede, $newPossede);
        }
        return $possede;
       
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

} // End Class Possede

?>

>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
