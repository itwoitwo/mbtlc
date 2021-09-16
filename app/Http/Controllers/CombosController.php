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
            'キャラクター' => 'required|string|',
            'damage' => 'integer|nullable',
            'version' => 'required|string|',
            '始動技' => 'required|string|',
            'counter_hit' => 'required|string|',
            '状況' => 'required|string|max:8|',
            'magic_circuit' => 'required|integer|',
            'moon' => 'required|integer|',
            'コンボレシピ' => 'required|string|max:191|min:5|regex:/>/|',
            'explain' => 'string|max:191|nullable',
            'video' => 'string|max:191|nullable',
        ]);

        if (isset($request->counter_hit)){
            $request->user()->combos()->create([
                'fighter' => $request->キャラクター,
                'damage' => $request->damage,
                'version' => $request->version,
                'starting' => $request->始動技,
                'counter_hit' =>$request->counter_hit,
                'place' => $request->状況,
                'magic_circuit' => $request->magic_circuit,
                'moon' => $request->moon,
                'recipe' => $request->コンボレシピ,
                'explain' => $request->explain,
                'video' => $request->video,
            ]);
        }else{
            $request->user()->combos()->create([
                'fighter' => $request->キャラクター,
                'damage' => $request->damage,
                'version' => $request->version,
                'starting' => $request->始動技,
                'place' => $request->状況,
                'magic_circuit' => $request->magic_circuit,
                'moon' => $request->moon,
                'recipe' => $request->コンボレシピ,
                'explain' => $request->explain,
                'video' => $request->video,
            ]);
        }

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