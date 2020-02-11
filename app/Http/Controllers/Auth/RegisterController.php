<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    //Test git by Namo
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => 'required'
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
        // dd($data['image']->getClientOriginalName());
        
        if(isset($data['image'])){
            $image_filename = $data['image']->getClientOriginalName();
            $image_name = date('Ymd-His-').$image_filename;
            $public_path = 'user_images/';
            $destination = base_path() . "/public/" . $public_path;            
            $data['image']->move($destination, $image_name);
            $image_path = $public_path . $image_name;
            }
            // dd($image_path);

        // $request = app('request');
        // if($request->hasfile('image')){
        // $image = $request->file('image');
        // $filename = time() . '.' . $image->getClientOriginalExtension();
        // User::make($image)->resize(300, 300)->save( public_path('/user_images/' . $filename) );
    

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'image' => $image_path,
            'password' => Hash::make($data['password']),
        ]);
    }
}
