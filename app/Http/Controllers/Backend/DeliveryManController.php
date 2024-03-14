<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DeliveryManController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=User::where('role_id',3)->paginate(10);
        return view('backend.admin.deliveryman.index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.deliveryman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => 3,
                'password' => Hash::make($request->password)
            ]);
            return redirect()->route(request()->session()->get('roleIdentity').'.deliveryman.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        return view('backend.admin.deliveryman.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $user=User::find($id);
            $user->name=$request->name;
            $user->email=$request->email;
            if($request->password){
                $user->password=Hash::make($request->password);
            }
            $user->save();
            return redirect()->route(request()->session()->get('roleIdentity').'.deliveryman.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
