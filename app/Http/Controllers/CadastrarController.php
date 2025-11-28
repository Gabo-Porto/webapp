<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ramal;

class CadastrarController extends Controller
{
    // Validar e persistir dados
    public function salvar(Request $request)
    {
        $request->validate(
            [
                'nome'  => 'required|string|max:60',
                'area'  => 'required|string|max:20',
                'ramal' => 'required|integer',
                'andar' => 'required|integer|min:0|max:14',
                'email' => 'required|email|max:60',
            ],
            [
                'nome.required' => 'O campo nome é obrigatório.',
                'nome.string'   => 'O nome deve ser um texto.',
                'nome.max'      => 'O nome pode ter no máximo 60 caracteres.',

                'area.required' => 'O campo área é obrigatório.',
                'area.string'   => 'A área deve ser um texto.',
                'area.max'      => 'A área pode ter no máximo 20 caracteres.',

                'ramal.required' => 'O ramal é obrigatório.',
                'ramal.integer'  => 'O ramal deve ser um número inteiro.',

                'andar.required' => 'O andar é obrigatório.',
                'andar.integer'  => 'O andar deve ser um número inteiro.',
                'andar.min'      => 'O andar não pode ser negativo.',
                'andar.max'      => 'O andar deve ser no máximo 14.',

                'email.required' => 'O email é obrigatório.',
                'email.email'    => 'Informe um email válido.',
                'email.max'      => 'O email pode ter no máximo 60 caracteres.',
            ]
        );


        $ramal = new Ramal();
        $ramal->fill($request->all());
        $ramal->save();

        return view('cadastrosalvo');
    }
}
