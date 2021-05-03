<?PHP
class Message{
	private $id;
	private $source;
	private $destinataire;
	private $contenu;
	private $date;
	private $readDestinataire;

	function __construct($id,$source,$destinataire,$contenu){
		$this->id=$id;
		$this->source=$source;
		$this->destinataire=$destinataire;
		$this->contenu=$contenu;
		//date_default_timezone_set('UTC+1');
		$this->date = date('Y-m-d H:i:s');
		$this->readDestinataire=0;

		
	

	}
	
	function getId(){
		return $this->id;
	}
	function getSource(){
		return $this->source;
	}
	function getDestinataire(){
		return $this->destinataire;
	}
	function getContenu(){
		return $this->contenu;
	}
	function getDate(){
		return $this->date;
	}






	
}

?>