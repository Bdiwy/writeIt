<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar',
        'status',
        'interests',
        'gender',
        'bio',
    ];
    
    protected $casts = [
            'interests' => 'array',   
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
