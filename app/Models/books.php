<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'author', 'publiser', 'year_published', 'stock'];

    public function loans()
    {
        return $this->hasMany(loans::class);
    }
}
