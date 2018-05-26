<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'street', 'house_number', 'zipcode', 'city', 'tax_number', 'kvk_number', 'date', 'product_id', 'amount', 'price', 'tax_percentage', 'tax_price',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
