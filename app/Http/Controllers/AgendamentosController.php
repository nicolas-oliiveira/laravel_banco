<?php

namespace App\Http\Controllers;
use App\Models\Agendamentos;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{
    public function store(Request $request){
        //enviando os dados para o banco de dados
        $agendamento = new Agendamentos();
        $agendamento->nome = $request->nome;
        $agendamento->telefone = $request->telefone;
        $agendamento->origem = $request->origem;
        $agendamento->data_contato = $request->contato;
        $agendamento->observacao = $request->observacao;
        $agendamento->save();

        return redirect()->route('index')->with('sucess','agendamento criad com sucesso!');
    }

    public function show(){
        $tableagenda = Agendamentos::all();
        return view('consulta', ['agendamentos' => $tableagenda]);
    }
}
?>