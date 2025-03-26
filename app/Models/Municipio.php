<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Municipio extends Model
{
    use HasFactory;
    protected $table = 'tb_municipio'; 
    protected $primaryKey = 'muni_codi';
    public $timestamps = false;



    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'depa_codi', 'depa_codi');
    }
}
