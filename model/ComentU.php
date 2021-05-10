<?php
class Comment
{
	public $id_coment;
	public $id_sender;
	public $id_reciever;
	public $message;
	public $date_com;


	 function __construct($id_sender,$id_reciever,$message,$date_com)
	
	{
		 $this->id_sender=$id_sender;
		 $this->id_reciever=$id_reciever;
		 $this->message=$message;
		 $this->date_com=$date_com;
		 //$this->date=$date;
	}

			function getid_sender(): int{
				return $this->id_sender;
			}
			function getid_reciever(): int{
				return $this->id_reciever;
			}
            function getMessage(): string{
				return $this->message;
			}
			/*
            function getdate(): string{          // date
				return $this->date;
			}
			*/

}

?>