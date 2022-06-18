<?php

ini_set('display_errors', 1);

require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($n = 0; $n < 10; $n++) {
    $html .= 'Ó o pente! <br>';
}

$dompdf->loadHtml('<h1>Olá mundo! estou aprendendo php</h1>' . $html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
