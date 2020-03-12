<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', '=', request('username'))->first();

        if (!$user) {
            $message = "Votre nom d'utilisateur n'est pas valide.";
            return response()->json([
                'message' => $message,
                'status' => 422
            ], 422);
        }
        if (!Hash::check(request('password'), $user->password)) {
            $message = "Votre mot de passe n'est pas valide.";
            return response()->json([
                'message' => $message,
                'status' => 422
            ], 422);
        }
        $client = DB::table('oauth_clients')
            ->where('password_client', true)
            ->first();

        if (!$client) {
            return response()->json([
                'message' => 'Laravel passport n\'est pas initialisé.',
                'status' => 500
            ], 500);
        }
        $data = [
            'grant_type' => 'password',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'username' => $user->email,
            'password' => request('password'),
        ];

        $request = Request::create('/oauth/token', 'POST', $data);
        $response = app()->handle($request);

        if ($response->getStatusCode() != 200) {
            return response()->json([
                'message' => $request,
                'status' => 422
            ], 422);
        }

        // session TODO
                // ici code des sessions
            
                // $request->session()->put('info', $data);
            
                // $user = User::where('email', $data['username'])->first();
                // return $user;
            
                // if ($user && md5($data['password']) == $user['password']) {
                //     //Si une session existe, accès autorisée    
                //     if ($request->session()->has('info')) {
                
                //         return redirect('/dashboard');
                //     }
                // } else {
                //     return redirect('/dashboard/login');
                // }
        // Fin de session

        $data = json_decode($response->getContent());

        return response()->json([
            'token' => $data->access_token,
            'user' => $user,
            'status' => 200
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json('Vous êtes bien deconnecté.', 200);
    }
}
