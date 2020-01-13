<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Departments;
use App\Models\EmpolyeeLevel;
use App\Models\UserEmployee;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pageTitle = "User Create";
      return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Employee / User Create";
        $departments = Departments::all();
        $emplyeelevels= EmpolyeeLevel::all();
        return view('admin.user.create',compact('departments','emplyeelevels','pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emuser = new UserEmployee();
        $emuser->department_id = $request->department_id;
        $emuser->emLevel_id = $request->emLevel_id;
        $emuser->name = $request->name;
        $emuser->email = $request->email;
        $emuser->gender = $request->gender;
        $emuser->save();
        return redirect()->route('admin.user.smart')->with('msg','Employee Create Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function smartwizard()
    {
        $user = UserEmployee::orderBy('id','desc')->first();
        // return $user;
        return view('admin.user.smart',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
