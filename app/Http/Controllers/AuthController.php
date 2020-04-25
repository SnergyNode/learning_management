<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends MyController
{
    public function authenticate(Request $request){
        $remember = $request->input('remember')==='on'?true:false;
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')], $remember)){
            return redirect()->route('client.dashboard');
        }else{
            return back()->withErrors(array('email'=>'Invalid Credentials Given!'))->withInput($request->input());
        }
    }

    public function authenticateAdmin(Request $request){
        $remember = $request->input('remember')==='on'?true:false;
        if(Auth::guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')], $remember)){
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors(array('email'=>'Invalid Credentials Given!'))->withInput($request->input());
        }
    }

    public function send_pass_reset_link(Request $request){
        $email = $request->input('email');

        $user = User::where('email', $email)->first();

        if(!empty($user)){
            $user->reset_token = $this->makeToken();
            $user->reset_timer = time()+ (60 * 60);
            $user->update();
            $this->passwordResetMail($user);
        }

        return back()->withMessage("Password reset link sent to $email. Check your mailbox to reset your password");
    }

    public function register(Request $request){
        $email = $request->input('email');

        $terms = $request->input('terms');

        if($terms!=='on'){
            return back()->withErrors(array('email'=>'Accept terms and conditions to continue!'))->withInput($request->input());
        }

        $password = $request->input('password');
        $password2 = $request->input('confirm_password');

        if($password!==$password2){
            return back()->withErrors(array('email'=>'Password Mismatch!'))->withInput($request->input());
        }

        $exist = User::where('email', $email)->first();
        if(!empty($exist)){
            return back()->withErrors(array('email'=>'Email already exist!'))->withInput($request->input());
        }

        $user = new User();
        $user->email = $email;
        $user->unid = $this->generateId('Usr', 33);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->password = bcrypt($password2);
        $user->active = false;
        $user->token = $this->makeToken();

        $user->save();

        $this->welcome($user);

        return back()->withMessage("Your account has been created");

    }

    public function activate_me($token){
        $user = User::where('token', $token)->first();
        if(!empty($user)){
            $user->active = true;
            $user->update();
            return redirect()->route('home')->withMessage('Account and Email Activated');

        }

        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home')->withMessage('Logged out successfully');
    }

    public function logoutAdmin(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->withMessage('Logged out successfully');
    }
}
