<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_membership',
        'id_country',
        'is_active',
        'id_user_created',
        'id_user_updated',
        'id_user_deleted',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_account');
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class, 'id_membership');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }
}
