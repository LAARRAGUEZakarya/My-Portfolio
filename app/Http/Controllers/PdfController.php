<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function download()
    {
        $file = public_path('cv/CV.pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file, 'CV-LAARRAGUEZakarya.pdf', $headers);
    }

}
