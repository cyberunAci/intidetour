<?php

namespace App\Http\Middleware;

use App\RolesModel;
use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        $user =  $request->user();
        $role = RolesModel::find($user->id_role);

        // return response()->json(['error' => $role], 403);

        $roles = explode('|', $roles);

        if (!in_array($role->role, $roles)) {
            return response()->json(['error' => $role], 403);
        }
        return $next($request);
    }
}
