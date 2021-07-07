<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\User;

class AuthController extends Controller {

    public function loginSender(Request $request) {
        try{

            $user = User::where('email', $request->email)->first();

        }catch(\Exception $e) {

            Session::flash('error', 'Terdapat Kesalahan');
            return redirect()->route('login_sender_view');

        }

        // if user hasn't created yet in the database
        if (empty($user)) {

            Session::flash('error', 'Pengguna Tidak Ditemukan');
            return redirect()->route('login_sender_view');

        }

        // checking password user in database
        if (Hash::check($request->password, $user->password)) {

            Auth::login($user);
            // returned authenticated user
            if(Auth::user()->level == 'sender') {
                return redirect()->route('home');
            } else {
                Session::flash('error', 'Masuk pada halaman yang salah');
                return redirect()->route('login_sender_view');    
            }

        } else {

            // wrong input password
            Session::flash('error', 'Kata Sandi Salah');
            return redirect()->route('login_sender_view');

        }
    }

    public function loginAdmin() {
        
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }
}
