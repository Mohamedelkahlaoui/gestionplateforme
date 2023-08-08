<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $table = 'budgets';
    protected $fillable = [
        'exercice',
        'gestfplat',
        'aidempj',
        'entrjeu',
        'soutess',
        'foraccje',
    ];
}
