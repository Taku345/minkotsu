<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tricks()//: BelongsToMany
    {
        return $this->belongsToMany(Trick::class);
    }

    public function users()//: BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
