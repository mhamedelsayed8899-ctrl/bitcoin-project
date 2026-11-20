<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Admin::where('id' , ">" , "3")->delete() ;
        $admins = Admin::all() ;
        return view('dashborad.pages.admins.view' , compact('admins')) ;
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashborad.pages.admins.add') ;

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        $admin = $request->except('_token' , 'confirm') ;
        $img_name = $request->file('img')->store('admins' , 'public') ;
        $admin['img'] = $img_name ;

        // Admin::create($admin) ;
        Admin::create($admin) ;
        return to_route('admin.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('dashborad.pages.admins.edit' , compact('admin')) ;

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {

        $new_data = $request->except('_token' , '_method') ;
        if($request->hasFile('img')){

             unlink(storage_path('app/public/'.$admin->img));
              $img_name = $request->file('img')->store('admins' , 'public') ;
              $new_data['img'] = $img_name ;

        }

        $admin->update($new_data) ;
        return to_route('admin.index') ;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
       unlink(storage_path('app/public/'.$admin->img));
        $admin->delete() ;

        return to_route('admin.index') ;

    }
}
