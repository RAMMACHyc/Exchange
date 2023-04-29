<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'productCategory',
        'description',
        'user_id',
        'image_path',
        'statut',
       
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
    public function propositions()
    {
        return $this->hasMany(propositions::class);
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
    }
    
}
