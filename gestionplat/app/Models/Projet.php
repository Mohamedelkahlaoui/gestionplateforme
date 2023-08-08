<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Projet extends Model
{
    use HasFactory;
    protected $table = 'projets';
    protected $fillable = [
        'anneeprog',
        'reference',
        'intitule',
        'couttotal',
        'partIndh',
        'delaireal',
        'provs_id',
        'comm_id',
        'part_id',
    ];
    public function provinces()
    {
        return $this->belongsTo(Province::class, 'provs_id', 'id');
    }
    public function communes()
    {
        return $this->belongsTo(Commune::class, 'comm_id', 'id');
    }
    public function partenaires()
    {
        return $this->belongsTo(Partenaire::class, 'part_id', 'id');
    }

}
