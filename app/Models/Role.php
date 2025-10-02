<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    public $timestamps = false;

    protected $table = 'cat_roles';

    protected $fillable = [
        'name',
        'max_users',
        'is_active',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_role');
    }
}