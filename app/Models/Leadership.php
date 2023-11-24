<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    use HasFactory;
    protected $table="leaderships";
    protected $fillable=['image', 'name', 'position', 'email', 'experience', 'status'];
}
