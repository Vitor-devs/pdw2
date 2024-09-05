<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;

class CadastrarController extends Controller
{
    //
    public function salvar(Request $request){
        $request->validate([
            'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'processador' => 'required|string|max:255',
            'ram' => 'required|integer|min:1',
            'preco' => 'required|numeric|min:0',
        ], [
            'modelo.required' => 'O campo modelo é obrigatório.',
            'modelo.string' => 'O campo modelo deve ser uma string.',
            'modelo.max' => 'O campo modelo não pode ter mais que 255 caracteres.',
            'marca.required' => 'O campo marca é obrigatório.',
            'marca.string' => 'O campo marca deve ser uma string.',
            'marca.max' => 'O campo marca não pode ter mais que 255 caracteres.',
            'processador.required' => 'O campo processador é obrigatório.',
            'processador.string' => 'O campo processador deve ser uma string.',
            'processador.max' => 'O campo processador não pode ter mais que 255 caracteres.',
            'ram.required' => 'O campo RAM é obrigatório.',
            'ram.integer' => 'O campo RAM deve ser um número inteiro.',
            'ram.min' => 'O campo RAM deve ser no mínimo 1 GB.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um número.',
            'preco.min' => 'O campo preço deve ser no mínimo 0.',
        ]);

        $notebook = new Notebook();
        $notebook->fill($request->all());
        $notebook->save();
        
        //dd($request);

        return view('cadastrosalvo');
    }
}
