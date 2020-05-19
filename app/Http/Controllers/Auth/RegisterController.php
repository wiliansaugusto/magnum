<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use App\User;
use App\Http\Controllers\Controller;
=======
use App\Http\Controllers\Controller;
use App\Usuario;
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

<<<<<<< HEAD
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

=======
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('guest');
=======
        $this->middleware('auth');
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
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
<<<<<<< HEAD
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
=======
            'nm_usuario' => 'required|string|max:255',
            'emailcad' => 'required|string|email|max:255|unique:users',
            'passwordcad' => 'required|string|min:6|confirmed',
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
<<<<<<< HEAD
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
=======
     * @return \App\Usuario
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nm_usuario' => $data['nm_usuario'],
            'email' => $data['emailcad'],
            'password' => Hash::make($data['passwordcad']),
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
        ]);
    }
}
