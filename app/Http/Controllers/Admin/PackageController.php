<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{

    public function index()
    {
        $package = Package::all();
        return view('admin.package.index', compact('package'));
    }


    public function create()
    {
        //return view('admin.package.create');
    }


    public function store(Request $request)
    {
        /*$this->validate($request,[  
           'name'        =>   'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/|max:120',
           'message'     =>   'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/|max:120',
           'duration'    =>   'required|min:1|max:3',  
           'amount'      =>   'required|numeric|min:1|max:4', 
           'coins'       =>   'required|numeric|min:1|max:4',
           'genre1'      =>   'required|numeric|min:1|max:2',
           'pics1'       =>   'required|numeric|min:1|max:2',
           'genre1'      =>   'required|numeric|min:1|max:2',
           'pics1'       =>   'required|numeric|min:1|max:2',
        ]);*/

        $package           =    new Package();
        $package->name     =    $request->name;
        $package->message  =    $request->message;
        $package->amount   =    $request->amount;
        $package->genre1   =    $request->genre1;
        $package->pics1    =    $request->pics1;
        $package->genre2   =    $request->genre2;
        $package->pics2    =    $request->pics2;
        $package->coins    =    $request->coins;
        $package->duration =    $request->duration;  
        //dd($package);
        $package->save();

        /*if(!is_null($package)) { 
            return back()->with("success", "Registration completed successfully");
        }

        else {
            return back()->with("failed", "Registration failed. Try again.");
        }*/

       return redirect()->route('admin.rewards.index');
    }


    public function show(Package $package)
    {
        //return view('admin.package.show', compact('package'));
    }


    public function edit(Package $package)
    {
        //return view('admin.package.edit', compact('package'));
    }


    public function update(Request $request, $id)
    {
        /*$this->validate($request,[             
            'name'        =>   'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/|max:120',
            'message'     =>   'required|regex:/^[a-zA-ZÃ‘Ã±\s]+$/|max:120',
            'duration'    =>   'required|min:1|max:3',  
            'amount'      =>   'required|numeric|min:1|max:4', 
            'coins'       =>   'required|numeric|min:1|max:3',
            'genre1'      =>   'required|numeric|min:1|max:2',
            'pics1'       =>   'required|numeric|min:1|max:2',
            'genre1'      =>   'required|numeric|min:1|max:2',
            'pics1'       =>   'required|numeric|min:1|max:2',
         ]);*/


        $package           = Package::find($id);
        $package->name     = $request->name;
        $package->message  = $request->message;
        $package->amount   = $request->amount;
        $package->genre1   = $request->genre1;
        $package->pics1    = $request->pics1;
        $package->genre2   = $request->genre2;
        $package->pics2    = $request->pics2;
        $package->coins    = $request->coins;
        $package->duration = $request->duration;  
        $package->save();

        return redirect()->route('admin.package.index');
    }


    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->back();
    }
}
