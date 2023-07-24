<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'duedate', 'status', 'user_id'];

    public function user()
    {
        $this-> belongsTo(User::class);
    }
}
