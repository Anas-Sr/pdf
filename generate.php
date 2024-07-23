<?php
include 'fpdf.php';

$pdf = new FPDF();

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email = $_POST['email']; 
    $about = $_POST['about'];
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",19);
    $pdf->Cell(200,10,"user info",1,1,"C");

    $pdf->cell(50,30,"FirstName:",1,0);
    $pdf->cell(140,30,$fname,1,1);
    
    $pdf->cell(50,30,"Email:",1,0);
    $pdf->cell(140,30,$email,1,1);

    $pdf->cell(50,30,"About:",1,0);
    $pdf->cell(140,30,$about,1,1);


    $pdf->Output();

}
?>