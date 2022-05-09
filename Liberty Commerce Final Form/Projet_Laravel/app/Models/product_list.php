<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_list extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
    'picture'    
    ];
    
    public function users()
    {
        return $this->hasMany(users::class);
} 
 }

