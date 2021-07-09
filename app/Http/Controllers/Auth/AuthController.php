<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

use App\User;

class AuthController extends Controller {

    public function login(Request $request) {
        try{

            $user = User::where('email', $request->email)->first();

        }catch(\Exception $e) {
            Alert::toast('Terjadi Kesalahan', 'error', 'top')->position('top');
            return redirect()->route('login_view');

        }

        // if user hasn't created yet in the database
        if (empty($user)) {
            Alert::toast('Akun tidak terdaftar', 'error', 'top')->position('top');
            return redirect()->route('login_view');

        }

        // checking password user in database
        if (Hash::check($request->password, $user->password)) {

            Auth::login($user);
            // returned authenticated user
            if(Auth::user()->level == 'sender') {
                return redirect()->route('upload_mading_view');
            } else if(Auth::user()->level == 'admin') {
                return redirect()->route('dashboard');
            } else {
                //wrong role
                Alert::toast('Akun akses terbatas', 'error', 'top')->position('top');
                return redirect()->route('login_view');    
            }

        } else {

            // wrong input password
            Alert::toast('Kata sandi salah', 'error')->position('top');
            return redirect()->route('login_view');

        }
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        Alert::alert('Berhasil Log Out', '', 'info');
        return redirect()->route('home');
    }
}
