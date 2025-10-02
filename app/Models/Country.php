<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    protected $table = 'cat_countries';

    protected $fillable = [
        'name',
        'is_active',
    ];

    public function states()
    {
        return $this->hasMany(State::class, 'id_country');
    }

    public function memberships()
    {
        return $this->hasMany(Membership::class, 'id_country');
    }

    public function accounts()
    {
        return $this->hasMany(Account::class, 'id_country');
    }
}