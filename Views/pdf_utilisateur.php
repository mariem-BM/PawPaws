<?php
require("fpdp/fpdf.php");
include "../controller/UserC.php";

    $UtilisateurC=new UserC();
    $listeUsers=$UtilisateurC->afficherUtilisateurs();

    class mypdf extends FPDF
      {
         function header()
           {

               //$this->Image('fpdp/logo2.png',10,6);
           
               $this->SetTextColor(30,144,255);

                // Arial bold 15
                $this->SetFont('Arial','B',35);
    $this->Cell(276,5,'Utilisateurs',0,0,'C');
    // Saut de ligne
    $this->Ln();
    $this->SetFont('Times','',20);
    $this->Cell(276,10,'Liste Des utilisateurs',0,0,'C');
    // Saut de ligne
    $this->Ln(20);
    
              
           }
            function Footer()
                {
                    
                    // Position at 1.5 cm from bottom
                    $this->SetY(-15);
                    // Arial italic 8
                    $this->SetFont('Arial','I',8);
                    // Page number
                    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
                }
      }

        $pdf = new mypdf('P','mm','A4');
        $title = 'Utilisateurs';
        $pdf->SetTitle($title);
        $pdf->AliasNbpages();
        $pdf->AddPage('L','A4',0);
        $pdf->Ln();
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(40,10,'Nom',1,0,'C');
        $pdf->Cell(30,10,'Prenom',1,0,'C');
        $pdf->Cell(80,10,'Email',1,0,'C');
        $pdf->Cell(35,10,'Date de naissance',1,0,'C');
        $pdf->Cell(30,10,'Login',1,0,'C');
        $pdf->Cell(25,10,'Sexe',1,0,'C');
        $pdf->Cell(40,10,'Role',1,0,'C');
        
    
        
        foreach($listeUsers as $user){
    

                $pdf->Ln();
                $pdf->Cell(40,10,$user['Nom'],1,0,'C');
                $pdf->Cell(30,10,$user['Prenom'],1,0,'C');
                $pdf->Cell(80,10,$user['Email'],1,0,'C');
                $pdf->Cell(35,10,$user['Date_N'],1,0,'C');
                $pdf->Cell(30,10,$user['Login'],1,0,'C');
                $pdf->Cell(25,10,$user['sexe'],1,0,'C');
                $pdf->Cell(40,10,$user['Role'],1,0,'C');



                     }
                   
        $pdf->Output(); 
                    
?>