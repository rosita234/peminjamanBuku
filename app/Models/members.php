<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $table = 'members';
    protected $fillable = ['name', 'address', 'email', 'phone'];

    public function loans()
    {
        return $this->hasMany(loans::class);
    }
}
