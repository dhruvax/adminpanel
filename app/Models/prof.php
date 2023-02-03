<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof extends Model
{
    use HasFactory;
    protected $table = 'prof';
    protected $fillable = [
		'image',
        'name',
        'email',
        'mobile',
        'location',
        'description',
    ];
}
