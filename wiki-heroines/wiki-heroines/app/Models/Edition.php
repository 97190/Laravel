<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;
    protected $fillable = ['owner'];

    public function heroines()
{
    return $this->hasMany(Heroine::class);
}
}   
