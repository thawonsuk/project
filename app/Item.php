<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table ='items';
    protected $fillable =['name','price','categories_id','idname','typename','id_status','detail','image'];


    public function categories(){
        return $this->belongsTo(Categorie::class,'categories_id');
}
}