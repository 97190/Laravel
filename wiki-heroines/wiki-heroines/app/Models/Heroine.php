<?php

namespace App\Models;

use App\Models\Groupe;
use App\Models\Edition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Heroine extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'gender', 'founded', 'description', 'power', 'groupe_id', 'edition_id'];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
        
    }

    public function edition()
    {
        return $this->belongsTo(Edition::class);
        
    }
}
