<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories'; //กำหนดชื่อตารางฐานข้อมูล
    protected $fillable = ['id','name',
];

public function items(){
    return $this->hasMany(Item::class);
}
}
