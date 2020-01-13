<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Departments;

class DepartmentController extends Controller
{
   public function index(){
       $pageTitle = "Department List";
       $data = Departments::all();
       return view('admin.department.index',compact('pageTitle','data'));
   }
     public function create(){
     $pageTitle = " Add Department";
     return view('admin.department.create',compact('pageTitle'));
  }

  public function store(Request $request){

  $this->validate($request, [
           'name'           =>  'required',
        ]);

       $department = new Departments();
       $department->name = $request->name;
       $department->save();
       return redirect()->route('admin.department.index');

   }
   public function edit($id){
     $department =  Departments::find($id);
    $pageTitle = " Add Department";
    return view('admin.department.edit',compact('pageTitle','department'));
 }

 public function update(Request $request,$id){

    $this->validate($request, [
             'name'           =>  'required',
          ]);

         $department =  Departments::find($id);
         $department->name = $request->name;
         $department->save();
         return redirect()->route('admin.department.index');

     }
     public function delete($id){
        $department = Departments::find($id)->delete();
        return back();
     }


}
