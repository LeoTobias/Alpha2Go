<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\Pedido;


class Pedido_Item extends Model
{
  use HasFactory;
  
  protected $fillable = [
  'PRODUTO_ID',
  'PEDIDO_ID',
  'ITEM_QTD',
  'ITEM_PRECO'
  ];

    protected $table="PEDIDO_ITEM";

    protected $primaryKey = "PEDIDO_ID";

    public $timestamps = false;

    public $foreignKey = "PEDIDO_ID, PRODUTO_ID";

    public function Produto() {
    return $this->belongsTo(Produto::class, 'PRODUTO_ID');
}
  public function Pedido() {
    return $this->belongsTo(Pedido::class, 'PEDIDO_ID');
    
  }

  
}
