<?php

require("vendor/autoload.php");

if (isset($_POST["buildPDF"])) {
    $rss = simplexml_load_file("https://www.yahoo.com/news/rss") or die("RSS is not available.");
    $pdf = new \Mpdf\Mpdf();
    $pdf->SetTitle("yahoo-news");

    foreach ($rss->channel->item as $item) {
        $node = $item->children('media', true)->content;
        $img = !empty($node) ? $node->attributes()->url : false;
        $pdf->AddPage();
        $pdf->WriteHTML("<br/>");
        $pdf->WriteHTML("<h2 style='text-align: center;'>" . $item->title . "</h2>");
        $pdf->WriteHTML("<br/>");

        if(!$img) {
            $pdf->WriteHTML("<br/>");
            $pdf->WriteHTML("<h3 style='text-align: center;'>No Image Available</h3>");
            $pdf->WriteHTML("<br/>");
        } else {
            $pdf->WriteHTML("<img src=" . $img . " width='600' height='600'/>");
            $pdf->WriteHTML("<br/>");
        }

        $pdf->WriteHTML("<h3 style='text-align: center;'><a href='" . $item->link . "'>Link To Full Story</a></h3>");
    } 
    
    $pdf->Output();
}

?>