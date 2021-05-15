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
		$connStr = getBDD();
        
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

