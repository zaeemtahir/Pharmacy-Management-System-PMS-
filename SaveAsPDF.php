<?php
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;

// Create a new instance of Dompdf
$dompdf = new Dompdf();

// Load the HTML content
$html = '<html><body><h1>Hello, World!</h1></body></html>';
$dompdf->loadHtml($html);

// (Optional) Set additional configuration options
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Save the PDF file
$output = $dompdf->output();
file_put_contents('output.pdf', $output);

echo 'PDF file has been saved.';
?>