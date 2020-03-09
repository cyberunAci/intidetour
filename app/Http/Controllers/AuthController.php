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


        return json_encode($client) ;
    }
}
