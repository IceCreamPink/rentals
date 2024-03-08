<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::all();
        return view('user.tampil', ['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required', 
            'nama_lengkap'=>'required', 
            'no_hp'=>'required', 
            'alamat'=>'required', 
            'email'=>'required', 
            'hak_akses'=>'required'
        ]);
        $data=[
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'nama_lengkap'=>$request->nama_lengkap, 
            'no_hp'=>$request->no_hp, 
            'alamat'=>$request->alamat, 
            'email'=>$request->email, 
            'hak_akses'=>$request->hak_akses
        ];
        User::create($data);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        User::where('id', $user->id)->delete();
        return redirect('user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if($request->password ==null){
        $data=[
            'username'=>$request->username,
            'nama_lengkap'=>$request->nama_lengkap, 
            'no_hp'=>$request->no_hp, 
            'alamat'=>$request->alamat, 
            'email'=>$request->email, 
            'hak_akses'=>$request->hak_akses
        ];  
        }else{
                    $data=[
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'nama_lengkap'=>$request->nama_lengkap, 
            'no_hp'=>$request->no_hp, 
            'alamat'=>$request->alamat, 
            'email'=>$request->email, 
            'hak_akses'=>$request->hak_akses
        ];  
        }
        User::where('id', $user->id)->update($data);
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(){
        return view('login');
    }
    public function proseslogin(Request $request){
        $request->validate([
            'username'=>'required', 
            'password'=>'required'
        ]);
        $data = $request->only(['username', 'password']);
        if(Auth::attempt($data)){
            return redirect('/');
        }else{
            return redirect('login');
        }
    }
    public function logout(){
        Auth::logout();
        Session()->flush();
        return redirect('login');
    }
}