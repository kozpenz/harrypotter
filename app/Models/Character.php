<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function house()
    {
        return $this->hasOne(House::class, 'house_id', 'id');
    }
}
