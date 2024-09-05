<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;

class XmlController extends Controller
{
    //
    public function gerarXml(){
        $dados = Notebook::all();
        return response()->view('data-xml', ['registros'=> $dados])->header('Content-Type','application/xml');
    }
}
