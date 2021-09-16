<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Combo;
use App\User;



class CombosController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            
            $data = [
                'user' => $user,
            ];
        }
        
        return view('welcome', $data);
    }

    public function store(Request $request)
    {   
        $this->validate($request, [
            'fighter' => 'required',
            'damage' => 'integer',
            'version' => 'required|string|',
            'starting' => 'required|string|',
            'place' => 'required|string|max:8|',
            'magic_circuit' => 'integer',
            'moon' => 'integer',
            'recipe' => 'required|string|max:191|',
            'explain' => 'string|max:191|',
            'video' => 'string|max:191|',
        ]);

        $request->user()->combos()->create([
            'fighter' => $request->fighter,
            'damage' => $request->damage,
            'version' => $request->version,
            'starting' => $request->starting,
            'place' => $request->place,
            'magic_circuit' => $request->magic_circuit,
            'moon' => $request->moon,
            'recipe' => $request->recipe,
            'explain' => $request->explain,
            'video' => $request->video,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $combo = \App\Combo::find($id);

        if (\Auth::id() === $combo->user_id) {
            $combo->delete();
        }

        return back();
    }

    public function combo_post()
    {
        return view('combos.combo_post');
    }
}