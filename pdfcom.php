<?php 
require_once("./modele/fonction.php");
require_once("./modele/connexionBDD.php"); 
require ('./template/lib/fpdf/fpdf.php'); 

class PDF extends FPDF
{
function Header()
{
    // Logo
    $this->Image('public/images/icons/logosite1.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',30);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(50,10,'BON DE COMMANDE',0,0,'C');
    
    // Saut de ligne
    $this->Ln(60);

}
// Chargement des données

// Tableau simple
function BasicTable($header)
{ $connexion = BDDConnexionPDO();
	$lire3 = read($connexion,'historiquecommande','*', ['id_user'=>$_GET['id'],'date_commande'=>$_GET['date']],'');
	$lire2 = read($connexion,'utilisateur','*', ['id_user'=>$_GET['id']],'');
	foreach($lire2 as $uneligne)
	{
	$this->Cell(50,10,'Nom'); $this->Cell(50,10,$uneligne->nom_user);
	$this->Ln();
    $this->Cell(50,10,'Prenom'); $this->Cell(50,10,$uneligne->prenom_user);
    $this->Ln();
    $this->Cell(50,10,'Adresse'); $this->Cell(50,10,$uneligne->adresse_user);
    $this->Ln();
    $this->Cell(50,10,'EmailL'); $this->Cell(50,10,$uneligne->mail_user);
    $this->Ln();
     $this->Cell(50,10,'Effectuee le'); $this->Cell(50,10,$_GET['date']);
    $this->Ln();
}
    $this->Ln(60);
	$w = array(15, 80, 25, 25,25);// En-tête
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	// données
	
	$t =0;
	// Données
	foreach($lire3 as $uneligne)
	{
		$total = $uneligne->quantite_commande_hist * $uneligne->prix_article_hist;
	$this->Cell($w[0],6,$uneligne->ref_commande,1);

	$this->Cell($w[1],6,$uneligne->nom_article_hist,1);
	$this->Cell($w[2],6,$uneligne->platforme_jeux_commande,1);
	$this->Cell($w[3],6,$uneligne->quantite_commande_hist,1);
	$this->Cell($w[4],6,$total,1);
	$this->Ln();
	
	$t = $t + $total;
	
	
	}
	$this->Ln();
$this->Cell(50,10,'Total = ',0,0,'C'); $this->Cell(50,10,$t.' euro',0,0,'C');
}

}
$pdf = new PDF();
// Titres des colonnes
$header = array('Ref','Nom', 'Platforme', 'Quantite','Prix');
// Chargement des données

$pdf->SetFont('Arial','',14);

$pdf->AddPage();

$pdf->BasicTable($header);
$pdf->Output();
$pdf->Header();