<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contacts";
    // protected $primaryKey = "website_id";
    protected $fillable =['name', 'email', 'title', 'description'];
}
