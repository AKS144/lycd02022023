<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rewards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RewardsController extends Controller
{

    public function index()
    {
        $reward = Rewards::all();
        return view('admin.rewards.index', compact('reward'));
    }


    public function create()
    {
        //return view('admin.rewards.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[           
            'budget'  =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|min:3|max:100',           
            'coins'    =>  'required|numeric|min:2|max:3',                
        ]);

        $reward = new Rewards();
        $reward->budget = $request->budget;
        $reward->coins = $request->coins;
        $reward->save();

        return redirect()->route('admin.rewards.index');
    }


    public function show(Rewards $reward)
    {
        return view('admin.rewards.show', compact('reward'));
    }


    public function edit(Rewards $reward)
    {
        //return view('admin.rewards.edit', compact('reward'));
    }


    public function update(Request $request, $id)
    {
       /* $this->validate($request,[           
            'budget'  =>  'required|regex:/^[a-zA-ZÑñ\s]+$/|min:3|max:100',           
            'coins'    =>  'required|numeric|min:2|max:3',                
        ]);*/

        $reward = Rewards::find($id);
        $reward->budget = $request->budget;
        $reward->coins = $request->coins;
        $reward->save();

        return redirect()->route('admin.rewards.index');
    }


    public function destroy($id)
    {
        $reward = Rewards::find($id);
        $reward->delete();
        return redirect()->back();
    }
}
