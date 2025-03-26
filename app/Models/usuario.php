<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $table = 'tb_usuario';
    protected $primaryKey = 'usua_codi';
    public $timestamps = false;
    protected $fillable = [
        'usua_user', 
        'usua_pass',
        'perso_cod',
         
        ];
}
