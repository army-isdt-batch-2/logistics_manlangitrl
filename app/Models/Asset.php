<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table="assets";

    protected $fillable=[
    'name',
    'description',
    'category',
    'supplier_id',
    'storage_id',
    'total_stocks'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }


    public function distribution()
    {
        return $this->hasOne(Distribution::class,'distribution_id');
    }

    public function return()
    {
        return $this->hasOne(Returns::class,'asset_id');
    }


}
