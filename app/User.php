<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Combo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login_id', 'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function combos()
    {
        return $this->hasMany(Combo::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Combo::class, 'favorites', 'user_id', 'combo_id')->withTimestamps();
    }

    public function favorite($comboId)
    {
        //既にお気に入りかどうかの確認
        $exist = $this->is_favoring($comboId);
        
        if($exist){
            return false;
        } else {
            $this->favorites()->attach($comboId);
            return true;
        }
    }

    public function unfavorite($comboId)
    {
        //既にお気に入りかどうかの確認
        $exist = $this->is_favoring($comboId);
        
        if($exist){
            $this->favorites()->detach($comboId);
        } else {
            return false;
        }
    }
    
    public function is_favoring($comboId)
    {
        return $this->favorites()->where('combo_id', $comboId)->exists();
    }
    
    public function adopts()
    {
        return $this->belongsToMany(Combo::class, 'adopts', 'user_id', 'combo_id')->withTimestamps();
    }

    public function adopt($comboId)
    {
        //既にお気に入りかどうかの確認
        $exist = $this->is_adopting($comboId);
        
        if($exist){
            return false;
        } else {
            $this->adopts()->attach($comboId);
            return true;
        }
    }

    public function unadopt($comboId)
    {
        //既にお気に入りかどうかの確認
        $exist = $this->is_adopting($comboId);
        
        if($exist){
            $this->adopts()->detach($comboId);
        } else {
            return false;
        }
    }
    
    public function is_adopting($comboId)
    {
        return $this->adopts()->where('combo_id', $comboId)->exists();
    }

}
