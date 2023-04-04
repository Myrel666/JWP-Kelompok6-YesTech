<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'kategori', 'address', 'address_url', 'foto', 'description'];
}