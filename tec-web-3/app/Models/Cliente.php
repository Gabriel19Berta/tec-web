<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'pessoa_id',
        'observacoes',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
