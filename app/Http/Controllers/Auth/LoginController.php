<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $req) {
        $input = $req->all();
        $fieldType = filter_var($req->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $login = User::where('username',$req->username)->first();
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])) && $login) {
            if(Hash::check($req->password,$login->password)) {
                return redirect()->route('home');
            } else {
                return redirect()->route('login')
                ->with('error','Username and/or Password Are Incorrect.');
            }
        } else {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'http://192.168.1.64/dts/api/getuser', [
            'form_params' => [
                'username' => $req->username,
                'password' => $req->password,
                ]
            ]);
            $res = json_decode($response->getBody()->getContents(), true);
            if($res) {
                $data = array(
                    'fname' => $res['fname'],
                    'mname' => $res['mname'],
                    'lname' => $res['lname'],
                    'username' => $res['username'],
                    'designation' => $res['designation'],
                    'division' => $res['division'],
                    'section' => $res['section'],
                    'password' => $res['password'],
                    'status' => $res['status'],
                    'last_login' => date('y-m-d'),
                    'login_status' => 'login',
                    'level' => 'user',
                    'void' => 0
                );
                $login = User::create($data);
                if(auth()->attempt(array($fieldType => $login->username, 'password' => $input['password']))) {
                        return redirect()->route('home');
                }
            }
            else {
                return redirect()->route('login')
                ->with('error','Username and/or Password Are Incorrect.');
            }
        }
    }
}
