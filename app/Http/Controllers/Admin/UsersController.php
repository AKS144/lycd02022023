<?php



namespace App\Http\Controllers\Admin;



use Gate;

use App\Role;

use App\User;

use App\Album;

use App\Profile;

use App\Contract;
use App\Transaction;

use App\Wallet;

use App\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Http\Requests\UpdateUserRequest;

//use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests\MassDestroyUserRequest;
use Symfony\Component\HttpFoundation\Response;




class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','ASC')->get();
        $roles = Role::all()->pluck('title', 'id');
        
        return view('admin.users.index', compact('users','roles'));
    }



    public function create()
    {
        $roles = Role::all()->pluck('title', 'id');
        return view('admin.users.create', compact('roles'));
    }


    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index');
    }


    public function edit(User $user)
    {
        $roles = Role::all()->pluck('title', 'id');
        $user->load('roles');
        return view('admin.users.edit', compact('roles', 'user'));
    }


    /*public function update(Request $request, User $user)
    {
        $user->update($request->all());
        //$user->roles()->sync($request->input('roles', []));
        return redirect()->route('admin.users.index');
    }*/


    public function show(User $user)
    {
        $user->load('roles');
        return view('admin.users.show', compact('user'));
    }


    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }


   /* public function massDestroy(Request $request)
    {
        User::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }*/


    public function profile($id)
    {
        $users = User::find($id);
        //$profile = DB::table('profiles')->where('userid', $id)->first();
        $profile = Profile::where('userid','=',$id)->first();


        //column is 16 in profile table 100/16=6.25
        $maximumPoints  = 100;
        $a = !empty($profile->name) ? 6.25 : 0;
        $b = !empty($profile->dob) ? 6.25 : 0;
        $c = !empty($profile->mobile) ? 6.25 : 0;
        $d = !empty($profile->email) ? 6.25 : 0;
        $e = !empty($profile->id_type) ? 6.25 : 0;
        $f = !empty($profile->id_no) ? 6.25 : 0;
        $g = !empty($profile->gender) ? 6.25 : 0;
        $h = !empty($profile->profile_img) ? 6.25 : 0;
        $i = !empty($profile->userid) ? 6.25 : 0;
        $j = !empty($profile->location_id) ? 6.25 : 0;
        $k = !empty($profile->skills) ? 6.25 : 0;
        $l = !empty($profile->exp_yrs) ? 6.25 : 0;
        $m = !empty($profile->work_loc) ? 6.25 : 0;
        $n = !empty($profile->qualification) ? 6.25 : 0;
        $o = !empty($profile->studio_address) ? 6.25 : 0;
        $p = !empty($profile->overview) ? 6.25 : 0;
        
        $percentage = intval(($a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p)*$maximumPoints/100);   

        $albums = Album::where('user_id','=',$id)->get();   
        
        $contracts = Contract::where('artist_id','=',$id)->whereNotNull('artist_sign')->latest()->take(5)->get();
        //$contracts = Contract::where('artist_id','=',$id)->paginate(5);

      
        $transactions = Transaction::join('users', 'users.id', '=', 'transactions.artist_id')
                                    ->join('jobs', 'jobs.id', '=', 'transactions.job_id')
                                    ->take(5)
                                    ->get(['transactions.*', 'users.*','jobs.*']); //dd($transaction);

        /*$transactions = Transaction::join('users', 'users.id', '=', 'transactions.artist_id')
                                    ->join('jobs', 'jobs.id', '=', 'transactions.job_id')    
                                    ->get(['transactions.*', 'users.*','jobs.*']); */
                                       //dd($transaction);   
                                       //$paginator = Paginator::make($transactions->toArray(), self::count());                   

        $wallet = Wallet::where('user_id','=',$id)->first(); 
         
        $users = User::where('id','=',$id)->first(); 
        
        $packages = Wallet::join('packages','packages.id','=','wallets.package')
                             ->where('wallets.user_id','=',$id)   
                             ->first();
        
//dd($packages);

        return view('admin.users.profile', compact('users','profile','albums','percentage','contracts','transactions','wallet','packages','users'));
    }



    public function setting()
    {
        return view('admin.settings.index');
    }

    public function seo()
    {
        return view('admin.settings.seo');
    }

    public function email()
    {
        return view('admin.settings.email');
    }


    public function payment()
        {
            return view('admin.settings.payment');
        }


    public function social()
        {
            return view('admin.settings.social');
        }


}

