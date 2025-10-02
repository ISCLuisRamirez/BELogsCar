<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membership extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'price',
        'period',
        'quantity',
        'id_country',
        'id_user_created',
        'id_user_updated',
        'id_user_deleted',
        'is_active',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class, 'id_membership');
    }
}