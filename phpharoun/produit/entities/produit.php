<?PHP
class produit{
	private $id;
	private $nom;
	private $prix;

	
	function __construct($id,$nom,$prix){
		$this->id=$id;
		$this->nom=$nom;
		$this->prix=$prix;
		
	}
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	

	function setnom($nom){
		$this->nom=$nom;
	}

	
}

?>