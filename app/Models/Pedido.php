<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'PEDIDO';
    protected $primaryKey = 'PEDIDO_ID';

    protected $fillable = [
        'USUARIO_ID',
        'STATUS_ID',
        'PEDIDO_DATA'
    ];

    public $timestamps = false;

    public function status(){
        $status = $this->hasOne(PedidoStatus::class, 'STATUS_ID', 'STATUS_ID');
        return $status;
    }

    public function peditoItem(){
        $statusItem= $this->hasMany(PedidoItem::class, 'PEDIDO_ID', 'PEDIDO_ID');
        return $statusItem;
    }
}
