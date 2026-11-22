<?php 
namespace App\Http\Middleware; 
use Closure; 
use Illuminate\Http\Request; 
class IsLoginMiddleware
{ 
/** 
* Handle an incoming request. 
* 
* @param  \Illuminate\Http\Request  $request 
* @param  \Closure  $next 
* @return mixed 
*/ 
public function handle(Request $request, Closure $next) 
    { 
        //cek apakah ada session logged_in 
        if(!session('logged_in')) { 
            //jika tidak ada maka kembali ke url sebelumnya 
            return redirect()->back(); 
        } 
        return $next($request); 
    } 
}