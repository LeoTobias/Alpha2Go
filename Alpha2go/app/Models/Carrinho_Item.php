<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho_Item extends Model
{
    use HasFactory;

    protected $fillable = ['USUARIO_ID','PRODUTO_ID','ITEM_QTD'];

    protected $table="CARRINHO_ITEM";

    protected $primaryKey = "USUARIO_ID";

    public $timestamps = false;
}
