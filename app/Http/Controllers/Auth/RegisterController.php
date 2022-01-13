<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Client_User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use Illuminate\Validation\Rule;

use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Environment;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;

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
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $invalidSubdomains = config('app.invalid_subdomains');
         
        return Validator::make($data, [
            'account' => [
                'required', 
                'string',
                Rule::notIn( $invalidSubdomains ),
                'regex:/^[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])$/'
            ],
            'fqdn' => ['required', 'string', 'unique:hostnames'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        // $client_user = new Client_User();

        //  request()->validate([

        //      'account' => 'required',
        //      'name' => 'required',
        //      'email' => 'required',
        //      'password' => 'required',

        //  ]);


        //  $client_user->host = request('account');
        //  $client_user->name = request('name');
        //  $client_user->email = request('email');
        //  $client_user->password = Hash::make('password');
        


        //  $client_user->save();       
        // Use the Tenancy package command to create the tenant
        $hostname = $this->createTenant( $data['fqdn'] );

        // swap the environment over to the hostname
        app( Environment::class )->hostname( $hostname );
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        // $user->sendEmailVerificationNotification();

        
    }

    private function createTenant( $fqdn )
    {
        
        // first create the 'website'
        $website = new Website;
        app( WebsiteRepository::class )->create( $website );
        
        //  request()->validate([

        //          'name' => 'required',
        //          'email' => 'required',
        //           'password' => 'required',
    
        //      ]);
    

        // now associate the 'website' with a hostname
        $hostname = new Hostname;
        $hostname->fqdn = $fqdn;
        // $hostname->name = request('name');
        // $hostname->email = request('email');
        // $hostname->password = Hash::make('password');
        app( HostnameRepository::class )->attach( $hostname, $website );

        return $hostname;
    }
    public function register(Request $request) {


        // we'll add in our fqdn here
        $data = $request->all();
        if ( isset( $data['account'] ) ) {
            $fqdn = $data['account'] . '.' . config('app.url_base');
            $request->merge(['fqdn'=>$fqdn]);
        }
        

        // validate with the validator below
        $this->validator($request->all())->validate();

        // new registered user event
        event(new Registered($user = $this->create($request->all())));

        $client_user = new Client_User();

        request()->validate([
            'account' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $client_user->host = request('account');
        $client_user->name = request('name');
        $client_user->email = request('email');
        $client_user->password = Hash::make('password');
   
        $client_user->save();
        //$request->user()->sendEmailVerificationNotification();

        
        $port = $request->server('SERVER_PORT') == 8000 ? ':8000' : '';
        return redirect( ( $request->secure() ? 'https://' : 'http://' ) . $fqdn . $port . '/' );
        


    }
}
