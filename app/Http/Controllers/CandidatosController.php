<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CandidatoFullstack, CandidatoAnalyst};
use App\Http\Requests\CustomerRequest;
use App\Mail\EnvioCadastro;
use Illuminate\Support\Facades\Mail;

class CandidatosController extends Controller
{
    public function index(){
        return view('index');
    }

    public function Analyst(Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('vagaDataAnalyst', compact('mensagem'));
    }

    public function storeAnalyst(CustomerRequest $request) {
        CandidatoAnalyst::create([
            'nome' => $request -> nome,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'preferencia_contato' => $request -> preferencia_contato,
            'preferencia_trabalho' => $request -> preferencia_trabalho,
            'curriculo' => $request -> file('curriculo'),
        ]);

        $dados = [
            'nome' => $request -> nome,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'preferencia_contato' => $request -> preferencia_contato,
            'preferencia_trabalho' => $request -> preferencia_trabalho,
            'curriculo' => $request -> file('curriculo'),
        ];

        $vaga = 'Analyst';

        $user = (object) [
            'email' => 'anny.navarro@gmail.com',
            'name' => 'Anny Navarro'
        ];
    
        Mail::to($user)->send(new EnvioCadastro($dados, $vaga));
        
        $request->session()->flash('mensagem', "Cadastro enviado com sucesso!");
        $mensagem = $request->session()->get('mensagem');
      
        return redirect('/pagina_cadastro_analist');
    }

    public function Fullstack(Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('vagaFullStack', compact('mensagem'));
    }

    public function storeFullstack(CustomerRequest $request) {
        CandidatoFullstack::create([
            'nome' => $request -> nome,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'preferencia_contato' => $request -> preferencia_contato,
            'preferencia_trabalho' => $request -> preferencia_trabalho,
            'curriculo' => $request -> curriculo,
        ]); 

        $vaga = 'FullStack';

        $dados = [
            'nome' => $request -> nome,
            'email' => $request -> email,
            'telefone' => $request -> telefone,
            'preferencia_contato' => $request -> preferencia_contato,
            'preferencia_trabalho' => $request -> preferencia_trabalho,
            'curriculo' => $request -> file('curriculo'),
        ];

        $user = (object) [
            'email' => 'anny.navarro@gmail.com',
            'name' => 'Anny Navarro'
        ];
    
        Mail::to($user)->send(new EnvioCadastro($dados, $vaga));

        $request->session()->flash('mensagem', "Cadastro enviado com sucesso!");
        $mensagem = $request->session()->get('mensagem');

        return redirect('/pagina_cadastro_fullStack');
    }
}
