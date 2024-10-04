<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function LoginPage()
    {
        if (session()->has('token')) {
            return redirect()->route('Dashboard');
        }

        return view('LoginPage');
    }

    public function Verification(Request $request)
    {
        $token = $request->token;

        $verification = User::where('token', $token)
            ->whereNull('status')
            ->first();

        if ($verification) {
            session(['token' => $token]);
            return redirect()->route('Dashboard')->with('message', 'Login Success');
        } else {
            return redirect()->back()->with('message', 'Invalid Token');
        }
    }

    public function Logout()
    {
        session()->forget('token');
        return redirect()->route('LoginPage')->with('message', 'Logged out successfully');
    }

    public function Dashboard()
    {
        return view('UserDashboard');
    }
}
