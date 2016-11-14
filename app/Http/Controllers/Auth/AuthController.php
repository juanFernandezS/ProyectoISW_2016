<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|rut|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'rut' => $data['rut'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(Request $request){

        if (Auth::attempt(
            [
                'rut' => $request->rut,
                'password' => $request->password,
                'active' => 1
            ]
            , $request->has('remember')
        )){
            return redirect()->intended($this->redirectPath());
        }
        else{
            $rules = [
                'rut' => 'required|rut',
                'password' => 'required',
            ];

            $messages = [
                'rut.required' => 'El campo rut es requerido',
                'rut.email' => 'El formato del rut es incorrecto',
                'password.required' => 'El campo password es requerido',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            return redirect('auth/login')
                ->withErrors($validator)
                ->withInput()
                ->with('message', 'Error al iniciar sesión');
        }
    }
}
