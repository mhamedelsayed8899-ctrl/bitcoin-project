<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
      public function index()
    {
        // Admin::where('id' , ">" , "3")->delete() ;

        $users = User::all() ;
        return view( 'dashborad.pages.users.view' , compact('users')) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashborad.pages.users.add') ;

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = $request->except('_token' , 'confirm') ;
        $img_name = $request->file('img')->store('users' , 'public') ;
        $user['img'] = $img_name ;

        // Admin::create($admin) ;
        User::create($user) ;
        return to_route('user.index') ;
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashborad.pages.users.edit' , compact('user')) ;

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $new_data = $request->except('_token' , '_method') ;
        if($request->hasFile('img')){

             unlink(storage_path('app/public/'.$user->img));
              $img_name = $request->file('img')->store('users' , 'public') ;
              $new_data['img'] = $img_name ;

        }

        $user->update($new_data) ;
        return to_route('user.index') ;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
       unlink(storage_path('app/public/'.$user->img));
        $user->delete() ;

        return to_route('user.index') ;

    }


}
