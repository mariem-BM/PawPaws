<?PHP

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

//include "../config.php"; 
	include "../controller/UserC.php";

	$utilisateurC=new UserC();
	
	if (isset($_POST["id"])){
		$utilisateurC->validerUtilisateur($_POST["id"], $_POST["email"] , $_POST["name"]);
		// Set required parameters for making an SMTP connection
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";
		$mail->SMTPDebug  = 1;  
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPSecure = "tls";
		$mail->Port       = 587;
		$mail->Host       = "smtp.gmail.com";
		$mail->Username   = "pawpaw.admiiiin@gmail.com	";
		$mail->Password   = "esprit2020";

		$email=$_POST["email"];
		$name=$_POST["name"];
		// Set the required parameters for email header and body
		$mail->IsHTML(true);
		$mail->AddAddress($email, $name);
		$mail->SetFrom("healing.admiiiin@gmail.com				", "healing Admin");
		$mail->Subject = "Validation de votre compte healing";
		$content = "<b>Bonjour $name,  Votre compte a été validé avec succés.</b>";

		//Send the email and catch required exceptions:
		$mail->MsgHTML($content); 
		if(!$mail->Send()) {
			echo "<script>alert('Mail n'est pas envoyé );</script>";
		var_dump($mail);
		} else {
			echo "<script>alert('Mail envoyé avec succés' );</script>";
		}
		header('Location:validation.php');
	}

?>