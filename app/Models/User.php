<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\UserSetting;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $with = ['settings'];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function settings()
    {
        return $this->hasOne(UserSetting::class);
    }

    public function getIsProfileCompleteAttribute(): bool
    {
        $settings = $this->settings;

        return $settings
            && $settings->avatar
            && $settings->gender
            && $settings->bio;
    }

    public function getAvatarAttribute()
    {
        return $this->settings->avatar ?? 'default.png';
    }

    public function getAvatarUrlAttribute()
    {
        return asset('imgs/avatar/' . $this->avatar);
    }

    public function getGenderAttribute()
    {
        return $this->settings->gender ?? null;
    }

    public function getBioAttribute()
    {
        return $this->settings->bio ?? null;
    }

    public function getInterestsAttribute()
    {
        return $this->settings->interests ?? [];
    }

}
