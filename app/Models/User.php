<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; // Required for email verification
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail // Implement the MustVerifyEmail interface
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',  // This ensures password hashing
    ];

    /**
     * Check if the user's email has been verified.
     *
     * @return bool
     */
    public function hasVerifiedEmail() // Renamed method
    {
        return !is_null($this->email_verified_at);
    }
}
