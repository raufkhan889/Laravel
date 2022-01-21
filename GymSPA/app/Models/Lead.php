<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'phone',
        'dob',
        'package',
        'added_by',
        'branch_id'
    ];

    public function reminders()
    {
        $this->hasMany(Reminder::class)->orderByDesc('id');
    }
}
