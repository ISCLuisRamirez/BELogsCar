<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    public $timestamps = false;

    protected $table = 'cat_colonies';

    protected $fillable = [
        'name',
        'id_municipality',
        'is_active',
    ];

    public function municipality()
    {
        return $this->belongsTo(Municipality::class, 'id_municipality');
    }
}