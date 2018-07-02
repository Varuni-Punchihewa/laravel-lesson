<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /**
     *  View Login Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view("login");
    }

    /**
     * Submit Login Form
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login_post(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'No username',
            'password.required' => 'No password',
        ]);


        $inputs = $request->input();
        $username = $inputs["username"];
        $password = $inputs["password"];

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }
	
	public function logout()
	{
		try{
			Auth::logout();
		} catch(Exception $e){
			return redirect('/login');
		}
		
	}
}
