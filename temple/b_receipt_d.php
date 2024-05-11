<?php
require_once('tcpdf/tcpdf.php');

// Your existing PHP code here...


// Check if the download button is clicked
if(isset($_POST['download_pdf'])) {
    // Create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Set document information
    $pdf->SetCreator(hindu_temple);
    $pdf->SetAuthor('email');
    $pdf->SetTitle('Booking Details Receipt');
    //$pdf->SetSubject('Booking Details Receipt');
    //$pdf->SetKeywords('Booking, Receipt, PDF');

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Output the HTML content
    ob_start();
    include('b_receipt.php'); // Replace 'your_php_file.php' with the name of your PHP file
    $html = ob_get_clean();
    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('booking_receipt.pdf', 'D'); // 'D' forces download

    exit;
}
?>
