<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\SigninRequest;
use App\Http\Requests\Auth\SignupRequest;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function signin(){
        return view('authentication.signup');
    }

    public function register(SignupRequest $request){
        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => 2,
                'password' => Hash::make($request->password)
            ]);
            
                return redirect()->back()->withInput();
            
        }catch(\Exception $e){
            dd($e);
        }
    }
    public function login(SigninRequest $request){
        try{
            $user = User::where('email', $request->email)->first();
            if(Hash::check($request->password , $user->password)){
                $this->setSession($user);

                if($user->role_id==1)
                    return redirect()->route('admin.dashboard');
                else if($user->role_id==2)
                    return redirect(route('customerDashboard'));
                else
                    return redirect(route('deliverymanDashboard'));

            }else{
                return redirect()->back()->withInput();
            }
        }catch(\Exception $e){
            dd($e);
        }
    }

    public function setSession($user){
        return request()->session()->put(
            [
                'userId'=>$user->id,
                'roleIdentity'=>$user->role->identity,
                'roleName'=>$user->role->name,
                'email'=>$user->email,
                'name'=>$user->name
            ]
        );
    }

    public function logOut(){
        request()->session()->flush();
        redirect(route('home'));
    }
}
