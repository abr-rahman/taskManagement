<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\User;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'user_id',
        'title',
        'description',
        'date_line',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
