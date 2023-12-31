<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function user(): belongsTo
    {
      return $this->belongsTo(User::class);
    }
    
    public function tricks(): HasMany
    {
      return $this->hasMany(Trick::class);
    }

}
