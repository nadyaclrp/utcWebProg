<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "posts";
    public function Highlight()
    {
        return $this->hasOne(Highlight::class);
    }

}
