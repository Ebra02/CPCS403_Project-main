<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fName',
        'lName',
        'email',
        'phone',
        'subject',
        'satisfaction',
        'gender',
        'comment',
        'allow',
        'city',
        'state',
        'nickname',
        'honest',
    ];
}
