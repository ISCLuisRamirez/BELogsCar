<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;

    protected $table = 'cat_states';

    protected $fillable = [
        'name',
        'id_country',
        'is_active',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }

    public function municipalities()
    {
        return $this->hasMany(Municipality::class, 'id_state');
    }
}