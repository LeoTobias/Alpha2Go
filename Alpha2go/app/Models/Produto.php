<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Produto_Imagem;


class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['PRODUTO_NOME','PRODUTO_DESC','PRODUTO_PRECO','PRODUTO_DESCONTO','CATEGORIA_ID','PRODUTO_ATIVO'];

    protected $table="PRODUTO";

    protected $primaryKey = "PRODUTO_ID";

    public $timestamps = false;

    public $foreignKey = "CATEGORIA_ID";

    public function Categoria() {
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID');
}

    public function Imagens() {
        return $this->hasMany(Produto_Imagem::class, 'PRODUTO_ID');
    }

}