<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showloginform()
    {
        return view('/login');
    }

    public function showregisterform()
    {
        return view('/register');
    }

    public function checkLogin(Request $request)
    {
        $Email = $request->email;
        $Password = $request->password;

        $user=UserRegistration::where('email',$Email)->first();

        if($user){

            if(Hash::check($Password , $user->password)) {
                session(['user_id' =>$user->id, 'role' => $user->role]);

                session([
                    'user_id' => $user->id,
                    'role' => $user->role,
                    'email' => $user->email,
                ]);

                if($user->role == 'Applicant'){
                    return redirect('/applicant')->with('success' , 'applicant loggin successfull');
                }elseif($user->role == 'Employeer'){
                    return redirect('/employeer')->with('success' , 'employeer loggin successfull');
                }else{
                    return redirect('/')->with('error' , 'role not found');
                }
            }else{
                return redirect('/')->with('error' , 'email or password incorrect');
            }
        }
    }
}
