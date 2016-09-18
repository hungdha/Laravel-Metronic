<?php 
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{	     
		//$this->middleware('auth');
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

}
