<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $fillable = [
      'title',
      'description',
        'user_id',
        'category_id',
        'document',

    ];
    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable')->whereNull('parent_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
