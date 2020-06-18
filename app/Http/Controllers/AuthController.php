<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
//AuthController to handle authentication requests for the API
class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();
        return response([
            'status' => 'success',
            'data' => $user
        ], 200);
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ( ! $token = JWTAuth::attempt($credentials)) {
                return response([
                    'status' => 'error',
                    'error' => 'invalid.credentials',
                    'msg' => 'Invalid Credentials.'
                ], 400);
        }
        return response([
                'status' => 'success'
            ])
            ->header('Authorization', $token);
    }
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return response([
                'status' => 'success',
                'data' => $user
            ]);
    }
    public function refresh()
    {
        return response([
                'status' => 'success'
            ]);
    }
    public function logout()
    {
        JWTAuth::invalidate();
        return response([
                'status' => 'success',
                'msg' => 'Logged out Successfully.'
            ], 200);
    }

}

// public function login()
// {
//     $credentials = [
//         'email' => request('email'),
//         'password' => request('password')
//     ];

//     if (Auth::attempt($credentials)) {
//         $success['token'] = Auth::user()->createToken('MyApp')->accessToken;

//         return response()->json(['success' => $success]);
//     }

//     return response()->json(['error' => 'Unauthorised'], 401);
// }

// public function register(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'name' => 'required',
//         'email' => 'required|email',
//         'password' => 'required',
//     ]);

//     if ($validator->fails()) {
//         return response()->json(['error' => $validator->errors()], 401);
//     }

//     $input = $request->all();
//     $input['password'] = bcrypt($input['password']);

//     $user = User::create($input);
//     $success['token'] = $user->createToken('MyApp')->accessToken;
//     $success['name'] = $user->name;

//     return response()->json(['success' => $success]);
// }

// public function getDetails()
// {
//     return response()->json(['success' => Auth::user()]);
// }
