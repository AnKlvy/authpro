<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//Replace to Passport
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function customers()
    {
        return $this->hasOne(Customers::class);
    }

    public function role(){
        return $this->belongsToMany(Role::class, 'user_roles');

    }

    public function isAdmin(){
        return $this->role()->where('slug', 'admin')->exists();
    }

    public function productBought(){
        return $this->belongsToMany(Products::class, 'carts', 'user_id','product_id')
            //Vot tut vosmozhno nuzhno pomenyat biblioteku
                //Seichas stoit relations
            ->withTimestamps()
            ->withPivot('number', 'status');
    }
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
    ];



}
