<?php

// class LoginFilter implements FilterInterface{
//     public function before(RequestInterface $request)
//     {
//         if(!session()->has('logged_user')){
//             return redirect()->to(base_url().'/login');
//         }
//     }
//     public function after(RequestInterface $request, ResponseInterface $response)
//     {
//         ;
//     }
// }



namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthCheckFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(!session()->has('loggedUser')){
            return redirect()->to('/login')->with('fail','You must be logged In!');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}