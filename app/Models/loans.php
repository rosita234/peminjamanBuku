<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    protected $table = 'loans';
    protected $fillable = ['member_id', 'book_id', 'borrow_date', 'return_date', 'status'];

    public function members()
{
    return $this->belongsTo(Members::class, 'member_id');
}

public function books()
{
    return $this->belongsTo(Books::class, 'book_id');
}
}