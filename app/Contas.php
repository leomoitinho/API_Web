<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contas extends Model
{
    protected $fillable = [
        'conta', 'saldo',
    ];
}
