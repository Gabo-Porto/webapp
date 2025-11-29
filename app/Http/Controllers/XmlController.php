<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ramal;


class XmlController extends Controller
{
    //pegar dados e gerar XML
    public function gerarXML(){
        $dados = Ramal::all();
        print_r($dados);

        return response()->view('data-xml', ['registros' => $dados])-> header('Content-Type','application/xml');
    }
}
