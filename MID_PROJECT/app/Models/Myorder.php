<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myorder extends Model
{
    use HasFactory;
    protected $table='myorders';
    public function detail(){
        return $this->belongsTo(Orderdetail::class, 'order_id','id');
    }
    //using eloquent
    public function assignedDetail(){
        return Orderdetail::where('id', $this->order_id)->first();
    }
}
