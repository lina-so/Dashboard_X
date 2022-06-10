<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Process;
use PDFF;

class PDFController extends Controller
{

    public function download($id) {
        
        $prc = Process::find($id);
        $data = Project::find($prc->project_id);
        $fileName = 'contract.pdf';
        
        $mpdf = new \Mpdf\Mpdf();
        // dd($prc, $data, $fileName, $mpdf);

        $html = \View::make('contract.pcont' , compact('data','prc'));
        $html = $html->render();

        $mpdf->autoLangToFont = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName , 'I');
    }

    public function doownload($id) {
        $prc = Process::find($id);
        $data = Project::find($prc->project_id);
        
        $fileName = 'contract.pdf';

        $mpdf = new \Mpdf\Mpdf();
        
        $mpdf->SetDisplayMode('fullpage');


        $html = \View::make('contract.scont')->with('data',$data);
        $html = $html->render();

        $mpdf->autoLangToFont = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName , 'I');
    }

}