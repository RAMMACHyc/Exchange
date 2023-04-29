<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propositions extends Model
{

    use HasFactory;

    protected $fillable = [
        'product_id',
        'user1_id',
        'user2_id',
        'description',
        'addedAmount',
        'status',
        'exchange_product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user1()
    {
     return $this->belongsTo(User::class, 'user1_id');
    }
    public function user2()
    {
     return $this->belongsTo(User::class, 'user2_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
