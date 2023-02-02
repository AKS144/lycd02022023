<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use App\Http\Requests\MassDestroyLocationRequest;

use App\Http\Requests\StoreLocationRequest;

use App\Http\Requests\UpdateLocationRequest;

use App\City;

use Gate;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;



class LocationsController extends Controller

{

    public function index()

    {       

        $locations = City::all();

        return view('admin.locations.index', compact('locations'));

    }



    public function create()

    {      

        //return view('admin.locations.create');

    }



    public function store(Request $request)

    {      
        $this->validate($request,[           
            'name' => 'regex:/^[a-zA-ZÑñ\s]+$/|max:120',            
            'longitude' => 'required|regex:/^\d+(\.\d{1,2})?$/',  
            'latitude' => 'required|regex:/^\d+(\.\d{1,2})?$/',   
        ]);

        $location = new City();

        $location->name =  $request->name;

        $location->longitude =  $request->longitude;

        $location->latitude =  $request->latitude;

        $location->save();

        return redirect()->route('admin.locations.index')->with('success','Added Sucessfully');

    }



    public function edit(City $location)

    {       

        //return view('admin.locations.edit', compact('location'));

    }



    public function update(Request $request,$id)

    {        
        $this->validate($request,[           
            'name' => 'regex:/^[a-zA-ZÑñ\s]+$/|max:120',            
            'longitude' => 'required|regex:/^\d+(\.\d{1,2})?$/',  
            'latitude' => 'required|regex:/^\d+(\.\d{1,2})?$/',   
        ]);

        $location = City::find($id);

        $location->name =  $request->name;

        $location->longitude =  $request->longitude;

        $location->latitude =  $request->latitude;

        $location->save();

        return redirect()->route('admin.locations.index')->with('success','Updated Sucessfully');

    }



    public function show(City $location)

    {        

        //return view('admin.locations.show', compact('location'));

    }



    public function destroy($id)

    {        

        $location = City::find($id);       

        $location->delete();

        return back()->with('success','Added Sucessfully');

    }



    // public function massDestroy(MassDestroyLocationRequest $request)

    // {

    //     Location::whereIn('id', request('ids'))->delete();



    //     return response(null, Response::HTTP_NO_CONTENT);

    // }

}

