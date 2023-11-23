<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'tbl_orders';

    // order hanya di miliki 1 user saja
    public function user(){
        return $this->belongsTo(User::class);
    }
}