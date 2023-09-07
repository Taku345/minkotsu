<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function user(): belongsTo
    {
      return $this->belongsTo(User::class);
    }

    public function trick(): belongsTo
    {
      return $this->belongsTo(Trick::class);
    }
}
