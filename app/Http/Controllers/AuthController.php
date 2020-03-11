<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $http = new \GuzzleHttp\Client;

        try {
            $response = $http->post('http://localhost:8000/oauth/token', [
                'form_params' => [
                    'grant-type' => 'password',
                    'client_id' => 2,
                    'client_secret' => "qcwI0Ox6vjwsYsy3aC2vMDi8hblYZYEdeHC4rYsk",
                    'username' => $request->username,
                    'password' => $request->password,
                ]
            ]);
            return $response->getBody();
            
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() == 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            }
            else if ($e->getCode() == 401) {
                return response()->json('Yout credentials are Incorect. Please try again', $e->getCode());
            }
            return response()->json('Something went wront on the server', $e->getCode());
            
        }
    }
}
