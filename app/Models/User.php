<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Faker\Factory as Faker; buat faker
// $faker = Faker::create('id_ID'); --> dalam function runnya

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    // public function Category()
    // {
    //     return $this->belongsTo(Category::class);
    // menjadi PK untuk table category
    // }

    // public function Detail()
    // {
    //     return $this->hasOne(Detail::class);
    // menjadi FK untuk table Detail
    // }

    // public function Book()
    // {
    //     return $this->belongsToMany(Book::class);
    //     // return $this->belongsToMany(Book::class,'book_category'); --> incase harus sebut table perpanjangannya
    // }


    // protected $table = 'book_category'; //buat kasi tau klo ad nama table yang beda dari yg dubentuk default/mastiin nama tablenya sesuai
    // protected $primaryKey = "id"; //buat mastiin nama primaryKeynya
}
