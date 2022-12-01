<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Pedido_Item;
use App\Models\Pedido_Status;


class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
  //'PEDIDO_ID',
      'USUARIO_ID',
      'STATUS_ID',
      'PEDIDO_DATA'
  ];

    protected $table="PEDIDO";

    protected $primaryKey = "PEDIDO_ID";

    public $timestamps = false;

    public $foreignKey = "USUARIO_ID";

    public function Usuario() {
        return $this->belongsTo(Usuario::class, 'USUARIO_ID');
    }

    public function Itens() {
        return $this->hasMany(Pedido_Item::class, 'PEDIDO_ID');
    }

    public function Pedido_Status() {
        return $this->belongsTo(Pedido_Status::class, 'STATUS_ID');
    }
}
