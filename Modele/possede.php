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

