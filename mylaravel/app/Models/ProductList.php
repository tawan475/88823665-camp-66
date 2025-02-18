<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    //
    protected $table ="product_list";
    public $timestamps = false;

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
