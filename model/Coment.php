<?php
class Coment
{
	public $id;
	public $nom;
	public $message;
    public $date;


	 function __construct($id,$nom,$message,$date)
	
	{
		 $this->nom=$nom;
		 $this->message=$message;
		 $this->date=$date;
	}

			 function getId(): int{
				return $this->id;
			}
			function getNom(): string{
				return $this->nom;
			}
            function getMessage(): string{
				return $this->message;
			}
            function getdate(): string{
				return $this->date;
			}

}

?>