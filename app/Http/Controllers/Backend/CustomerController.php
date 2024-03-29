<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=User::where('role_id',2)->paginate(10);
        return view('backend.admin.customer.index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            User::create($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.customer.index');
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
    public function edit($id)
    {
        $user=User::find($id);
        return view('backend.admin.customer.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $user=User::find($id);
            $user->update($request->all());
            return redirect()->route(request()->session()->get('roleIdentity').'.customer.index');
        }catch(\Exception $e){
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
            $user->delete();
            return redirect()->route(request()->session()->get('roleIdentity').'.customer.index');
        }catch(\Exception $e){
            dd($e);
        }
    }
}
