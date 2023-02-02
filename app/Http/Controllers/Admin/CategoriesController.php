<?php



namespace App\Http\Controllers\Admin;



use App\Category;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\File;


class CategoriesController extends Controller

{

    public function index(Request $request)

    {   

        $category = $request->id;

             

        $categories = Category::all();        

        

        return view('admin.categories.index', compact('categories','category'));

    }



    public function create()

    {

        return view('admin.categories.create');

    }



    public function store(Request $request)
    {
        $this->validate($request,[          
            'name' => 'required|regex:/^[a-zA-ZÑñ\s]+$/|min:2|max:120',           
            //'cat_image' => 'image|max:5120|mimes:jpeg,png,jpg,svg',
       
        ]);

        $category        =  new Category();
        $category->name  =  $request->name;
        if($request->hasfile('cat_image'))
        {
           $image_file = $request->file('cat_image');
           $img_extension = $image_file->getClientOriginalExtension();
           $img_filename = time().'.'.$img_extension;
           //$image_file->move('public/cat_image/',$img_filename);//folder uploads           
           $category->cat_image = $img_filename;
           //dd($category);
           $category->save();
           if($category->save())
           {
                $image_file->move('public/cat_image/',$img_filename);//folder uploads       
           }        
        }  

        return redirect()->route('admin.categories.index')->with('success','Saved successfully');

    }



    public function edit(Category $category)

    {

        return view('admin.categories.edit', compact('category'));

    }



    public function update(Request $request,$id)

    {

        $this->validate($request,[       
            'name' => 'regex:/^[a-zA-ZÑñ\s]+$/|max:120',
            'cat_image' => 'image|max:2048|mimes:jpeg,png,jpg,svg',           

        ]);

        $category = Category::find($id);
        $category->name  =  $request->name;     
        if($request->hasfile('cat_image'))
        {
           $filepath_img = 'public/cat_image/'.$category->cat_image;
            if(File::exists($filepath_img))
            {
                File::delete($filepath_img);
            }
           $image_file = $request->file('cat_image');
           $img_extension = $image_file->getClientOriginalExtension();
           $img_filename = time().'.'.$img_extension;
           $image_file->move('public/cat_image/',$img_filename);
           $category->cat_image = $img_filename;
        }

        $category->save();
        return redirect()->route('admin.categories.index');
    }



    public function show(Category $category)

    {

        return view('admin.categories.show', compact('category'));

    }



    public function destroy($id) 
    {        
        $category = Category::find($id);
        $filepath_file = 'public/cat_image/'.$category->cat_image;
        if(File::exists($filepath_file))
        {
            File::delete($filepath_file);
        }    
        Category::where("id", $category->id)->delete();

        return redirect()->route('admin.categories.index');

    }



    // public function massDestroy(MassDestroyCategoryRequest $request)

    // {

    //     Category::whereIn('id', request('ids'))->delete();

    //     return response(null, Response::HTTP_NO_CONTENT);

    // }

}

