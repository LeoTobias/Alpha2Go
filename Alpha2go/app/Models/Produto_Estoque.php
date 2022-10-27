<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto_Estoque extends Model
{
    use HasFactory;

    protected $fillable = ['PRODUTO_ID','PRODUTO_QTD'];

    protected $table="PRODUTO_ESTOQUE";

    protected $foreignKey = "PRODUTO_ID";

    public $timestamps = false;

    public function Produto() {
        return $this->belongsTo(Produto::class, 'PRODUTO_ID');

}

}
