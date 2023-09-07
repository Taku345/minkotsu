<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Trick extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): belongsTo
    {
      return $this->belongsTo(User::class);
    }

    public function trick(): belongsTo
    {
      return $this->belongsTo(Trick::class);
    }

    public function replies(): HasMany
    {
      return $this->hasMany(Reply::class);
    }

    public function tags()//: BelongsToMany
    {
        return $this->belongsToMany(Tag::class,'tag_trick');
    }



    public static function getSuggestions($tags){
        $suggestions = new Collection();
        foreach($tags as $tag){
            $suggestions->add($tag->tricks->sortByDesc('good_count')->first());
        }
        // dd($suggestions);
        return $suggestions;
    }
}
