<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Combo extends Model
{
    protected $fillable = [
        'user_id',
        'fighter',
        'damage',
        'version',
        'favorite_count',
        'adoption_count',
        'starting',
        'place',
        'magic_circuit',
        'moon',
        'recipe',
        'explain',
        'video',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
