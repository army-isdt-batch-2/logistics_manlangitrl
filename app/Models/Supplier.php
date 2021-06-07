<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table="supplier";

    protected $fillable=[
        'name',
        'contact',
        'address',
        'contact_person',
        'category'

    ];

    public function asset()
    {
        return $this->hasOne(Asset::class,'supplier_id');
    }
}
