<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    // use HasFactory;

    protected $table = 'subscribers';
    protected $primaryKey = 'sub_ID';
    protected $fillable = ['email', 'category', 'status', 'time_stamp'];

    // Add any additional model logic or relationships here
}
