<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        
        // return $request->expectsJson() ? null : route('login'); 


         if (!$request->expectsJson()) {
            
        //     return route('selection');
            
            // if (Request::is(app()->getLocale() . '/student/dashboard')) {
            //     return route('selection');
            // }
            // elseif(Request::is(app()->getLocale() . '/teacher/dashboard')) {
            //     return route('selection');
            // }
            // elseif(Request::is(app()->getLocale() . '/parent/dashboard')) {
            //     return route('selection');
            // }
            // else {
                return route('selection');
            // }
        }
        
    }




    
}
