<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;
    protected $table="transportation";
        protected $fillable=[
        'plate_number',
        'driver_name',
        'driver_contact',
        'notes'
        ];
  
}
