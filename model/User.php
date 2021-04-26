<?php
class User
{
	public $nom;
	public $prenom;
	public $sexe;
	public $email;
	public $date;
	public $role;
	public $login;
	public $password;
	public $id;

	 function __construct($nom,$prenom,$sexe,$email,$date,$role,$login,$password)
	
	{
		$this->nom=$nom;
		 $this->prenom=$prenom;
		 $this->email=$email;
		 $this->sexe=$sexe;
		 $this->date=$date;
		 $this->role=$role;
		 $this->login=$login;
		 $this->password=$password;	
		 	}

			 function getId(): int{
				return $this->id;
			}
			function getNom(): string{
				return $this->nom;
			}
			function getPrenom(): string{
				return $this->prenom;
			}
			function getLogin(): string{
				return $this->login;
			}
			function getEmail(): string{
				return $this->email;
			}
			function getPassword(): string{
				return $this->password;
			}
			function getrole(): string{
				return $this->role;
			}

}

?>