<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /** @use HasFactory<\Database\Factories\LanguageFactory> */
    protected $fillable = ['language'];
    use HasFactory;
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
