<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatoAnalyst extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'telefone', 'preferencia_contato', 'preferencia_trabalho', 'curriculo'];
}
