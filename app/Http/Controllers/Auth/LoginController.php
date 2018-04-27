<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout']]);
    }

    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        // Attempt to log user in
        if (Auth::guard()->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
        {
            // If success  redirect to page that user wont
            return redirect()->route('admin');
        }
        else
        {
            // If fail redirect to login view
            return redirect()->back()->withInput($request->only('username', 'remember'));
        }

    }

    /**
     * Log the admin out of the application.
     */
    public function logout()
    {
        Auth::guard()->logout();

        return redirect()->route('admin.login');
    }
}
