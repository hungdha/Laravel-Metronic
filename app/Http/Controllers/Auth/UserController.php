<?php 
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
class UserController extends Controller {
	
	public function __construct()
	{	     
		$this->middleware('auth');
	}
			
	public function profile( $username ){
		
		$user = null;
		if( $username != ""){
			$user = DB::table('users')->where('username', $username )->first();
			if( !empty( $user )){
				unset($user->password);
				unset($user->remember_token);
			}
		}
		return view('auth.profile', ['user' => $user ]);
	}
	public function update( Request $request, $username ){
		if( $request->isMethod('post')){

			return view('auth.edit');
		}elseif( $request->isMethod('get')){

			$user = Auth::user();
			if( $user->username != $username ){
				return view('auth.edit');
			}else{
				return view('auth.edit');
			}
		
		}
	}

}
