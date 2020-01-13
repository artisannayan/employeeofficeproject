<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmpolyeeLevel;
use App\Models\Departments;

class EmpolyeeLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Employee Level List';
        $departmet = Departments::all();
        $data = EmpolyeeLevel::all();
        return view('admin.employeelevel.index',compact('pageTitle','data','departmet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departments::all();
        $pageTitle = 'Employee Level Create';
        return view('admin.employeelevel.create',compact('pageTitle','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form Validation
        $this->validate($request, [
            'department_id'           =>  'required|max:11',
            'position'                =>  'required',
            'isActive'				  =>  'required',
        ]);
       $emLevel = new EmpolyeeLevel();
       $emLevel->department_id = $request->department_id;
       $emLevel->position = $request->position;
         if($emLevel->isActive){
        $emLevel->isActive = 0;
          }else{
         $emLevel->isActive = 1;
      }
      $emLevel->save();
      return redirect()->route('admin.employeelevel.index')->with('msg','Empolyee Level Added Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Employee Level List';
        $emLevel = EmpolyeeLevel::find($id);
        return view('admin.employeelevel.edit',compact('pageTitle','emLevel'));
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
         //Form Validation
        //  $this->validate($request, [
        //     'department_id'           =>  'required|max:11',
        //     'position'                =>  'required',
        //     'isActive'				  =>  'required',
        // ]);
        $emLevel =  EmpolyeeLevel::find($id);
        // $emLevel->department_id = $request->department_id;
        $emLevel->position = $request->position;
          if($emLevel->isActive){
         $emLevel->isActive = 0;
           }else{
          $emLevel->isActive = 1;
       }
       $emLevel->save();
       return  redirect()->route('admin.employeelevel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $employeelevel = EmpolyeeLevel::find($id);
      if(!is_null($employeelevel)){
        $employeelevel->delete();
      }
      return back();
    }
}
