<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function adminposts()
    {
        return $this->belongsTo(adminposts::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
