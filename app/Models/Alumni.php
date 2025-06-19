<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni'; // ✅ Explicit table name

// Define fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'course',
        'graduation_year',
    ];};

    // Define any relationships if needed
    // public function events()
    // {
    //     return $this->belongsToMany(Event::class);
    // }
