<?php

namespace App\Http\Middleware;

use App\Enums\StatusCode;
use App\Traits\HttpResponses;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Permissions
{
    use HttpResponses;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        $user = $request->user();

        $userHasPermission = $user->hasPermissions($guards);


        if (!$userHasPermission) {
            return $this->failed(null, StatusCode::Forbidden->value, 'You are not permitted to access this resource');
        }

        return $next($request);
    }
}
