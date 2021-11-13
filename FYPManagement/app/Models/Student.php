<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'email', 'dept', 'domain', 'title'];

    public function project()
    {
        $this->hasOne(Project::class);
    }

    public function meetings()
    {
        $this->hasMany(Meeting::class);
    }
}
