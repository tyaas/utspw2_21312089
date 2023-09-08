<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;

    protected $table = 'peran';

    protected $fillable = ['film_id', 'cast_id', 'nama'];

    // public function Genre()
    // {
    //     return $this->belongsTo(Genre::class, 'genre_id', "id");
    // }
}
