<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FunctionController extends Controller
{
    public function TokenVerification()
    {
        if (session()->has('token')) {
            return redirect()->route('Dashboard');
        }

        return view('TokenVerification');
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
        return redirect()->route('TokenVerification')->with('message', 'Logged out successfully');
    }

    public function Dashboard()
    {
        if (!session()->has('token')) {
            return redirect()->route('TokenVerification');
        }
        return view('UserDashboard');
    }

    public function updateStatus($paslonId)
    {
        $token = session()->get('token');

        if (!$token) {
            return redirect()->route('TokenVerification')->with('error', 'Session expired or invalid token.');
        }

        $User = User::where('token', $token)->first();

        if (!$User) {
            return redirect()->route('TokenVerification')->with('error', 'User not found.');
        }

        $User->status = $paslonId;
        $User->save();
        session()->forget('token');

        return redirect()->route('TokenVerification')->with('message', 'Thank you for your participation.');
    }


    public function Paslon1()
    {
        return $this->updateStatus(1);
    }

    public function Paslon2()
    {
        return $this->updateStatus(2);
    }

    public function LoginView()
    {
        return view('KPOLogin');
    }

    public function Login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $verification = User::where('username', $username)->where('password', $password)->first();

        if ($verification) {
            session(['username' => $username, 'password' => $password]);
            return redirect()->route('AdminKPO');
        } else {
            return back()->with('message', 'User Not Found');
        }
    }

    public function KPO()
    {
        if (session()->has('username') && session()->has('password')) {
            $total = User::whereNotNull('status')->count();
            return view('KPODashboard', compact('total'));
        }

        return redirect()->route('TokenVerification');
    }

    public function DetailKPO()
    {
        if (session()->has('username') && session()->has('password')) {
            $total = User::whereNotNull('status')->count();
            $paslon1 = User::where('status', '1')->count();
            $paslon2 = User::where('status', '2')->count();
            return view('DetailKPO', compact('total', 'paslon1', 'paslon2'));
        }

        return redirect()->route('TokenVerification');
    }

    public function table(){
        $token = User::whereNull('status')->get();
        return view('table', compact('token'));
    }

}
