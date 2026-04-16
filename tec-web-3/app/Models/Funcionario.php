<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'pessoa_id',
        'data_admissao',
        'observacoes',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
