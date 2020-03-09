<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', '=', request('username'))->first();

        if (!$user) {
            return response()->json([
                'message' => 'Erreur 1',
                'status' => 422
            ], 422);
        }
        if (!Hash::check(request('password'), $user->password)) {
            return response()->json([
                'message' => 'Erreur 2',
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
            ],500);
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

        if ($response->getStatusCode() !=200) {
            return response()->json([
                'message' => $request,
                'status' => 422
            ], 422);
        }
        
        $data = json_decode($response->getContent());

        return response()->json([
            'token' => $data->access_token,
            'user' => $user,
            'status' => 200
        ]);
    }
}
