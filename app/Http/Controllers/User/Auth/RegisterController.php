<?php

namespace App\Http\Controllers\User\Auth;

use App\User;
use App\Http\Controllers\Controller;
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'firstname' => 'required|alpha|max:24',
            'lastname' => 'required|alpha|max:24',
            'email' => 'required|string|email|max:48|unique:users',            
            'password' => 'required|string|min:6|max:52',
            'confirmpassword' => 'required|same:password',
            'gender'=> 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $slug = $maybe_slug = str_before($data['email'], '@');
        $next = 2;

        while (User::Where('slug', '=', $slug)->first()) {
            $slug = "{$maybe_slug}-{$next}";
            $next++;
        }

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'username'=>$slug,
            'slug' => $slug,
            //'role'=> $data['email'], 
            //'age' => $data['age'],
            //'avatar' => $avatar,
            //'coverpic' => $coverpic,
        ]);
    }
}
