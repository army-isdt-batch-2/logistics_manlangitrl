<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    use HasFactory;
    protected $table="returns";
    protected $fillable=['asset_id',
    'returned_by',
    'returned_by_contact',
    'quantity',
    'reason'];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}
