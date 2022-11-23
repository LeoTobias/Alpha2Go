<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['CATEGORIA_ID','CATEGORIA_NOME','CATEGORIA_DESC','CATEGORIA_ATIVO'];

    protected $table="CATEGORIA";

    protected $primaryKey = "CATEGORIA_ID";

    public $timestamps = false;

     public function Produto() {
    return $this->hasMany(Produto::class, 'CATEGORIA_ID');
  }
}

