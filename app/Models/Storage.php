<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;
    protected $table="storage";

    protected $fillable=[
    'name',
    'building',
    'floor',
    'room',
    'cabinet'
    ];

    public function asset()
    {
        return $this->hasOne(Asset::class,'asset_id');
    }
}
