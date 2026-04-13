<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Biblioteca extends Model
{
    protected $fillable = [
        'nome',
        'autor',
        'descricao' ,
        'paginas', 
        'publicacao',
        'setores', 
        'custo', 
        'preço',
        'inposto'
            
    ];
}