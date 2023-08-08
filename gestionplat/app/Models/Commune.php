<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adresse',
    ];
    public function province(){
        return $this->belongsTo(Province::class, 'provs_id', 'name');
    }
}
