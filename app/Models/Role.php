<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function users()
    {
        $this -> hasMany(User::class);
    }

    public function permissions()
    {
        $this->belongsToMany(Permission::class, 'role_permission');
    }
}
