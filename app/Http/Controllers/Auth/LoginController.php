<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }
    public function login(Request $request)
    {
        if(isset($request->provider_id)){
            $pwd = $request->provider_id;
            $request->request->add(['password' => $pwd]);
        }
        try{
            $loginData = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            if( auth()->attempt($loginData, true) ) {
                if($request->isWeb){
                    $role_id = array("2", "3");
                }else{
                    $role_id = array("1", "4");
                }
                if(in_array(auth()->user()->role_id, $role_id)){
                    $document_type = DB::table('document_type')->get();
                    $accessToken = auth()->user()->createToken('Oauth2')->accessToken;
                    return response(['success' => true, 'status' => 200, 'user' => auth()->user(), 'support_contact' => '999999999', 'access_token' => $accessToken, 'document_type' => $document_type]);
                }
            }

            $mensaje = 'Usuario y/o contraseña incorrecta';
            if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) { $mensaje = 'Correo invalido';}
            return response(['success' => false, 'status' => 400, 'message'=> $mensaje]);


        }catch ( \Exception $e){
            $mensaje = '¡ERROR! contacta con soporte.';
            if(!isset($request->email)){ $mensaje = 'No se envió el parámetro email';}
            if(!isset($request->password)){ $mensaje = 'No se envió el parámetro password';}
            return response(['success' => false, 'status' => 400, 'message'=> $mensaje]);
        }
    }
    public function register(Request $request, $role_id = 1)
    {
        if(isset($request->provider_id)){

            $pwd = $request->provider_id;
            $request->request->add(['password' => $pwd]);
            $request->request->add(['password_confirmation' => $pwd]);

            $input['email'] = $request->email;
            $rules = array('email' => 'unique:users,email');

            $validator = Validator::make($input, $rules);

            if ($validator->fails()) {
                $array = array(
                    "Google" => "1",
                    "Facebook" => "2",
                    "Apple" => "3",
                );
                $provider = array_search(1, $array);
                $mensaje = 'Correo ya se registro con ' . $provider;
                return response(['success' => false, 'status' => 400, 'message'=> $mensaje],400);
            }
        }
        try {
            $validator = Validator::make($request->all(), [
                'user_doc_type_id' => 'required',
                'user_doc_number' => 'unique:users,user_doc_number|required',
                'user_name' => 'required',
                'user_lastname' => 'required',
                'email' => 'unique:users,email|required',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
                'birthday_date' => 'required',
                'cellphone_code' => 'required',
                'cellphone' => 'required',
            ]);

            if ($validator->fails()) {
                foreach ($validator->errors()->messages() as $valor) {
                    $mensaje = $valor[0];
                    $mensaje = str_replace("user doc number","N° documento",$mensaje);
                }
                $mensaje = ($mensaje === "El valor del campo email ya está en uso.") ? "El email ingresado ya se encuentro en uso." : $mensaje;
                return response(['success' => false, 'status' => 400, 'message'=> $mensaje],400);
            }

            $input = $request->all();
            $input['code'] = $request->get('user_doc_number'); //User::where('role_id', '=', 1)->count() + 1;
            $input['role_id'] = $role_id;
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            $token = $user->createToken('Oauth2')->accessToken;
            $document_type = DB::table('document_type')->get();
            return response(['success' => true, 'status' => 200, 'data'=> $user, 'token' => $token, 'document_type' => $document_type],$this->successStatus);


        }catch ( QueryException $e){
            return response(['success' => false, 'status' => 400, 'message'=> '¡ERROR! contacta con soporte.']);
        }
    }
    function logout()
    {
        //Auth::user()->AauthAccessToken()->delete();
        Session::flush();
        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        });
        return response()->json(
            ['success' => 'Logout Success'], $this->successStatus);
    }
}
