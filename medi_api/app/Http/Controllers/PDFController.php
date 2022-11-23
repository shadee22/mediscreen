<?php

namespace App\Http\Controllers;

use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PDFController extends Controller
{


    public function index()
    {
        // initiate FPDI
        $pdf = new Fpdi();
        // add a page
        $pdf->AddPage();
        // set the source file
        $pdf->setSourceFile( '/Users/macbook/Desktop/bee app/medi_api/resources/images/el.pdf');
        // import page 1
        $tplIdx = $pdf->importPage(1);
        // use the imported page and place it at position 10,10 with a width of 100 mm
        $pdf->useTemplate($tplIdx, 0, 0, 210);

        // now write some text above the imported page
        $pdf->SetFont('Arial','B');
        $pdf->SetTextColor(0, 0, 0);
        // $pdf->SetXY(40, 30);
        $pdf->Text(25 ,54, 'rfg com code no');
        $pdf->Text(25 ,54, 'last Name');
        $pdf->Text(25 ,54, 'rfg com code no');
        $pdf->Text(25 ,54, 'rfg com code no');

        $pdf->Output('I', 'generated.pdf');

        return ;
    }
}
