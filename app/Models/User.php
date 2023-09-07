<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // use HasApiTokens, HasFactory, Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }

    // public function hasRole($roleName)
    // {
    //     return $this->role->name === $roleName;
    // }

    // public function hasPermission($permissionName)
    // {
    //     return $this->role->permissions->contains('name', $permissionName);
    // }

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];
    protected $table = 'users';
    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'username',
        'password',
        'active',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
