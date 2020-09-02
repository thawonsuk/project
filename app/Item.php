<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table ='items';
    protected $fillable =['name','price','categories_id'];

    public function categories(){
        return $this->belongsTo(Categorie::class,'categories_id');
}
}

