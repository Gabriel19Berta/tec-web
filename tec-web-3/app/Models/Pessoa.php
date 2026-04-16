<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'status',
        'nome',
        'cpf',
        'cnpj',
        'tipo',
        'rg',
        'ie',
        'celular',
        'telefone',
        'email',
        'cep',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
        'cidade',
        'uf',
        'data_nascimento',
    ];

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
}
