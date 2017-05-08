<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $users = User::paginate(10);
        $data['users'] = $users;
        return view('admin.user.user-list',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.user-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'display_name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'avatar'    => 'image',
        ]);
       
        $validator->after(function ($validator) {
            $dataRequest = $validator->getData();
            $currentUser = User::where('email',$dataRequest['email'])->first();

            if ($currentUser->id) {
                $validator->errors()->add('email', 'Sorry, this email already exists!');
            }
        });

        if ($validator->fails()) {
            return redirect('admin/users/create')
                        ->withErrors($validator)
                        ->withInput($request->input);
        }

        $user = new User;
        $user->email = $request->email;
        $user->display_name = $request->display_name;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->hasFile('avatar')) {
            $request->avatar->
        }

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        // $user->email = 'admin@gmail.com';
        // $user->save();
        // dd($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        if ($user->id){
            $user->delete();
        }
        return redirect()->route('users.index');
    }
}
