<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    public $timestamps   = false;
    protected $fillable=['P_id,P_name,P_price,P_categories,P_quantity,
    P_details,P_img1,P_img2,P_img3'];
    protected $guarded=[];
    public function category(){
        return $this->belongsTo(Category::class, 'P_categories','id');
    }
}
