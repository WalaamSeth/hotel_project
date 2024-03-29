<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $quarded = false;

    protected $fillable = ['title', 'content'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
