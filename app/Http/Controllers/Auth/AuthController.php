<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

use App\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
         
        if ($validator->fails()) {
            Alert::toast($validator->errors()->first(), 'error', 'top')->position('top');
            return redirect()->route('login_view');
        }

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

    // register sender
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:50',
            'password' => 'required|confirmed|min:6'
        ]);
         
        if ($validator->fails()) {
            Alert::toast($validator->errors()->first(), 'error', 'top')->position('top');
            return redirect()->route('register_view');
        }

        try {
            //new user object
            $sender = new User;
            $sender->name = $request->name;
            $sender->email = $request->email;
            $sender->password = Hash::make($request->password_confirmation);
            $sender->level = 'sender';
            $sender->save();

        } catch(\Exception $e) {
            // if the eloquent fails
            Alert::toast('Terjadi Kesalahan', 'error', 'top')->position('top');
            return redirect()->route('register_view');
        }

        Alert::alert('Berhasil daftar', 'Silakan masuk terlebih dahulu', 'success');
        return redirect()->route('login_view'); 
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        Alert::alert('Berhasil Log Out', '', 'info');
        return redirect()->route('home');
    }
}
