<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $adopts = $user->adopts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'adopts' => $adopts,
        ];

        $data += $this->counts($user);
        
        
        return view('users.show', $data);
    }

    public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites();
        
        $data = [
            'user' =>$user,
            'favorites' => $favorites,
            ];
            
        $data += $this->counts($user);
        
        return view('users.favorites', $data);
    }

    public function adopts($id)
    {
        $user = User::find($id);
        $adopts = $user->adopts();
        
        $data = [
            'user' =>$user,
            'adopts' => $adopts,
            ];
            
        $data += $this->counts($user);
        
        return view('users.adopts', $data);
    }

    public function favorites_index($id){

        $user = User::find($id);
        $favorites = $user->favorites()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' =>$user,
            'favorites' => $favorites,
            ];

        return view('users.favorites_index', $data);
    }

    public function mycombos($id){

        $user = User::find($id);
        $mycombos = $user->combos()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'mycombos' => $mycombos,
        ];

        return view('users.mycombos', $data);
    }
}
