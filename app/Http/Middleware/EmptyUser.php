<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Str;
class EmptyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->get('uid')){
            $user = null;
            if ($request->get('uid')) {
                $user = $request->get('uid');
            } else {
                if ($request->user()) {
                    $user = $request->user()->id;
                } else {
                    $data = new User();
                    do {
                        $name = 'temp' . Str::random(10);
                        if (User::where('name', $name)->count() <= 0) {
                            $data = new User;
                            $data->name = $name;
                            $data->save();
                            break;
                        }
                    } while (1);
                    $user = $data->id;
                }
                $request->session()->put('uid', $user);
            }
            return $user;
        }
        return $next($request);
    }
}
