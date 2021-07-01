<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'publication_year'];

    public function author()
    {
        return $this->belongsToMany(
            Author::class,
            'book_author',
            'book_id',
            'author_id',

            // !Its hasManyThrough Example
            // '\App\Models\Author',
            // '\App\Models\BookAuthor',
            // 'book_id',
            // 'id',
            // 'id',
            // 'author_id'
        );
    }
}
