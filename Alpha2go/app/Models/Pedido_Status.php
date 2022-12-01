<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;


class Pedido_Status extends Model
{
    use HasFactory;
   
  protected $fillable = [
  'STATUS_ID',
  'STATUS_DESC'
  ];

    protected $table="PEDIDO_STATUS";

    protected $primaryKey = "STATUS_ID";

    public $timestamps = false;

   
    public function Pedido() {
    return $this->hasMany(Pedido::class, 'PEDIDO_ID');
}

}
