<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\API\APIController as APIController;
use Laravel\Passport\TokenRepository;
use Laravel\Passport\RefreshTokenRepository;

class AuthController extends APIController
{
    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            
            $data['username'] =  $user->username;
            $data['login_at'] =  Carbon::now();
            $data['token_expired_at'] =  Carbon::now()->addHours(10);
            $data['token'] =  $user->createToken($user->username)->accessToken;

            return $this->sendResponse($data, 'User login successfully.');
        } else {
            return $this->sendError('Wrong username or password.', ['error' => 'Unauthorized'], 401);
        }
    }

    public function logout()
    {
        Auth::user()->token()->revoke();

        $data['logout_at'] = Carbon::now();

        return $this->sendResponse($data, 'User successfully loged out.');
    }

    public function register(Request $request)
  {
    $user = User::create([
        'name' => $request->name,
        'username'=>$request->username,
        'nomorinduk' => $request->nomorinduk,
        'email' => $request->email,
        'prodi' => $request->prodi,
        'jeniskelamin' => $request->jeniskelamin,
        'password' => $request->password,

      ]);

      $data = $user;

      return $this->sendResponse($data, 'User successfully Register.');
  }
    
}