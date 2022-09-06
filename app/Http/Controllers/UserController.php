<?php

namespace App\Http\Controllers;

use App\Models\M_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data); 
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'role' => 'required',
            'email' => 'required',
            'username' => 'required|unique:tbuser',
            'password' => 'required'
        ]);
        $user = new M_user([
            'name' => $request->name,
            'address' => $request->address,
            'role' => $request->role,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->username)
        ]);
        $user->save();
        return redirect()->route('login')->with('success','Registration Success. Continue to Login');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data); 
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'username' => $request->username, 
            'password'=> $request->password])) 
            {
                
            $request->session()->regenerate();
            return redirect()->route('home')->with('success','Registration Success. Continue to Login');
        }
        return back()->withErrors('password','Wrong username or password');
    }

    public function chpass()
    {
        $data['title'] = 'Change Password';
        return view('user/chpass', $data); 
    }
    public function chpass_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
            $user = M_user::find(Auth::id());
            $user->password = Hash::make($request->new_password);
            $user->save();      
            $request->session()->regenerate();
            return back()->with('Success','Password Already Changed!');
        }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/'); 
    }


}
