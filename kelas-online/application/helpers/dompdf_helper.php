<?php
function pdf_create($html, $filename='', $paper, $orientation, $stream = TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();

    $dompdf->set_paper($paper, $orientation);
    $dompdf->load_html($html);
    $dompdf->render();

    if ($stream)
        $dompdf->stream($filename.".pdf", array("Attachment" => 0)); //For streaming view
    else
        $dompdf->stream($filename.".pdf"); // For download
}
