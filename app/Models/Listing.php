<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $table = 'manga_listing';

    protected $fillable = ['title', 'chapter', 'genre', 'link', 'user_id'];


    public function scopeFilter($query, $filters) {
        if ($filters['search'] ?? false) {
            $query->where(function ($query) use ($filters) {
                $query->where('title', 'like', '%' . $filters['search'] . '%')
                      ->orWhere('genre', 'like', '%' . $filters['search'] . '%');
            });
        }
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
