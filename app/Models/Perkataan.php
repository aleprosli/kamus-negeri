<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkataan extends Model
{
    use HasFactory;

    protected $fillable = [
        'perkataan',
        'maksud_perkataan',
        'contoh_ayat',
        'maksud_ayat',
    ];
}
