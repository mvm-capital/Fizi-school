<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids,HasRoles;

    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'bio',
        'two_factor_enabled',
        'two_factor_secret',
        'status',
        'date_of_birth',
        'last_login_at',
        'email_verified',
        'verification_code',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    public function sendVerificationEmail()
    {
        // This function will be called to send verification email
    }
}
