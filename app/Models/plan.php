<?php

namespace App\Models;

use App\Casts\PriceCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class plan extends Model
{
    use HasFactory;

    const TABLE = 'plans';

    protected $table = self::TABLE;

    protected $fillable=[
        'name',
        'slug',
        'stripe_name',
        'stripe_id',
        'price',
        'abbreviation',
    ];


    protected $casts =[
        'price' => PriceCast::class,
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    
}
