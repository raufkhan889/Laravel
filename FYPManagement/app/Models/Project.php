<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function student()
    {
        $this->belongsTo(Student::class);
    }

    public function advisor()
    {
        $this->belongsTo(Advisor::class);
    }
}
