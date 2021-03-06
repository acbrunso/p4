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

    protected $redirectPath = '/';

    protected $loginPath = '/login';

    protected $redirectAfterLogout = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|confirmed|min:6',
          'lastName' => 'required|max:255',
          'firstName' => 'required|max:255',
          'address' => 'required|max:255',
          'city' => 'required|max:255',
          'state' => 'required|max:255',
            'zip' => 'required|digits:5'
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
            'last_name' => $data['lastName'],
            'first_name' => $data['firstName'],
            'hosting_plan_id' => $data['hosting_plan_id'],
            'server_plan_id' => $data['server_plan_id'],
            'street_address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    
}
