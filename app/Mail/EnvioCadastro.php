<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnvioCadastro extends Mailable
{
    use Queueable, SerializesModels;

    protected $dados;
    public $vaga;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados, $vaga)
    {
        $this->dados = $dados;
        $this->vaga = $vaga;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nome = $this->dados['nome'];
        $email = $this->dados['email'];
        $telefone = $this->dados['telefone'];
        $preferencia_contato = $this->dados['preferencia_contato'];
        $preferencia_trabalho = $this->dados['preferencia_trabalho'];
        $curriculo = $this->dados['curriculo'];

        return $this->subject('Envio de cadastro para vagas de emprego.')
        ->markdown('mail.envioCadastro', compact('nome', 'email', 'telefone', 'preferencia_contato', 'preferencia_trabalho', 'curriculo'))
        ->attach($this->dados['curriculo']->getRealPath(), [
            'as' => 'Arquivo.' . $this->dados['curriculo']->getClientOriginalExtension(),
            'mime' => $this->dados['curriculo']->getMimeType(), 
        ]);
                    
    }
}
