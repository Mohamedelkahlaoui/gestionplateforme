<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adresse',
    ];
    public function communes(){
        return $this->hasMany(Commune::class, 'comm_id', 'name');
    }
    public function projets(){
        return $this->hasMany(Projet::class, 'provs_id', 'name');
    }
}
