<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{   
    public $timestamps = false;

    protected $table = 'cat_municipalities';

    protected $fillable = [
        'name',
        'id_state',
        'is_active',
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'id_state');
    }

    public function colonies()
    {
        return $this->hasMany(Colony::class, 'id_municipality');
    }
}