<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slogan extends Model
{
    use HasFactory;
    protected $table="slogans";
    protected $fillable=['title', 'heading', 'information'];
}
