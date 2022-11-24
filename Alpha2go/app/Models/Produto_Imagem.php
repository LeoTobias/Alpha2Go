<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto_Imagem extends Model
{
    use HasFactory;

    protected $fillable = ['IMAGEM_ID','IMAGEM_ORDEM', 'PRODUTO_ID', 'IMAGEM_URL'];

    protected $table="PRODUTO_IMAGEM";

    protected $primaryKey = "IMAGEM_ID";

    protected $foreignKey = "PRODUTO_ID";

    public $timestamps = false;

    public function Produto() {
        return $this->belongsTo(Produto::class, 'PRODUTO_ID');
}
}
