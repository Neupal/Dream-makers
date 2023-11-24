<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reach extends Model
{
    use HasFactory;
    protected $table='reaches';
    protected $fillable=['icon', 'topic', 'details'];
}
