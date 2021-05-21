<?PHP
class commande{
	private $date;
	private $prix;


	
	function __construct($date,$prix){
		$this->date=$date;
		$this->prix=$prix;
		
	}
	function getdate(){
		return $this->date;
	}
	function getprix(){
		return $this->prix;
	}
	

	function setprix($prix){
		$this->prix=$prix;
	}

	
}

?>