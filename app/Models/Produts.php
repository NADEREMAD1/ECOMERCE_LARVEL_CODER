<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'dec',
        'image',
        'catagories_id',
    ];
public function catagories(){
    return $this->belongsTo(Catogries::class);
}
}
