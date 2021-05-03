<?PHP
	class Produit{
		private $id = null;
		private $nom = null;
		private $type = null;
		private $quantite = null;
		private $image = null;
		private $prix = null;
	
		
		
	 function __construct( string $nom,  string $type, int $quantite, string $image, int $prix){
			
			$this->nom=$nom;
			$this->type=$type;
			$this->quantite=$quantite;
			$this->image=$image;
			$this->prix=$prix;
	
		}
		
        function getId(): int{
			return $this->id;
		}
	 function getnom(): string{
			return $this->nom;
		}
		 function gettype(): string{
			return $this->type;
		}	
		 function getimage(): string{
			return $this->image;
		}
		 function getquantite(): int{
			return $this->quantite;
		}
		 function getprix(): int{
			return $this->prix;
		}
	

		 function setnom(string $nom): void{
			$this->nom=$nom;
		}
		 function settype( string $type): void{
			$this->type=$type;
		}
		 function setimage(string $image): void{
			$this->image=$image;
		}
		 function setquantite(string $quantite): void{
			$this->quantite=$quantite;
		}
		 function setprix(string $prix): void{
			$this->prix=$prix;
		}
		}
	
?>