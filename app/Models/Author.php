<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'bio',
        'pic',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
}
