<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';
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

     public function viewUser(){
        return view('auth.register_user');
     }

     public function viewCompany(){
        return view('auth.register_company');
     }


    protected function validatorUser(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'name' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'email' => 'required|string|email|max:100|unique:users',
            'tel' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'introduce' => 'required|string|max:255',
            'stage_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'weight' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'career' => 'required|string|max:255',
        ]);
    }

    protected function validatorCompany(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'name' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'email' => 'required|string|email|max:100|unique:users',
            'tel' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'introduce' => 'required|string|max:255',
            'license_no' => 'required|string|max:255',
            'ceo' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'homepage' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
            'manager_position' => 'required|string|max:255',
            'manager_tel' => 'required|string|max:255',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function createUser(array $data)
    {
        return User::create([
            'user_type' => 'user',
            'id' => $data['id'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'birth' => $data['birth'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'type' => $data['type'],
            'introduce' => $data['introduce'],
            'stage_name' => $data['stage_name'],
            'gender' => $data['gender'],
            'height' => $data['height'],
            'weight' => $data['weight'],
            'local' => $data['local'],
            'career' => $data['career'],
        ]);
    }

    protected function createCompany(array $data)
    {
        return User::create([
            'user_type' => 'company',
            'id' => $data['id'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'birth' => $data['birth'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'type' => $data['type'],
            'introduce' => $data['introduce'],
            'license_no' => $data['license_no'],
            'ceo' => $data['ceo'],
            'address' => $data['address'],
            'homepage' => $data['homepage'],
            'manager' => $data['manager'],
            'manager_position' => $data['manager_position'],
            'manager_tel' => $data['manager_tel'],

        ]);
    }
}
