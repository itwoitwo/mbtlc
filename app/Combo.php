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
        'counter_hit',
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

    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'combo_id', 'user_id')->withTimestamps();
    }

    public function adopt_users()
    {
        return $this->belongsToMany(User::class, 'adopts', 'combo_id', 'user_id')->withTimestamps();
    }
}
