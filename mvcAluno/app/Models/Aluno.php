<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Turma  extends Model
{
    protected $fillble = [
        'numSala',
        'serie',
        'turma_id'
    ];

    public function turma(){
        return $this->belongsTo(Turma::class);
    }
}
?>