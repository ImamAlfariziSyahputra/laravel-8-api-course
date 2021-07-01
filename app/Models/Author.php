<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $hidden = [
        'laravel_through_key',
        'created_at',
        'updated_at',
    ];

    // !Its Not Working
    // public function book()
    // {
    //     return $this->belongsToMany(
    //         Book::class,
    //         'book_author',
    //         'author_id',
    //         'book_id'
    //     );
    // }
}
