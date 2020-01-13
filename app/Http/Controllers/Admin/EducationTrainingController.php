<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;

class EducationTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $pageTitle = "Education & Training";
     return view('admin.education.index',compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Education & Training";
       return view('admin.education.create',compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   $this->validate($request, [

        // 'user_id'     =>'required',
        // 'NofExam     '=>'required',
        // 'board'       =>'required',
        // 'passing_year'=>'required',
        // 'group'       =>'required',
        // 'CGPA'        =>'required',
        //  ]);

        $education = new Education();
        $education->EmployeeId = $request->EmployeeId;
        $education->ExamName = $request->ExamName;
        $education->board = $request->board;
        $education->group = $request->group;
        $education->passing_year = $request->passing_year;
        $education->CGPA = $request->CGPA;


        $education->save();
        return redirect()->route('admin.education.index');
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
      $education = Education::find($id);
      return view('admin.education.edit',compact('education'));
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
        $education = Education::find($id);
        $education->user_id = 1;
        $education->NofExam = $request->NofExam;
        $education->board = $request->board;
        $education->passing_year = $request->passing_year;
        $education->CGPA = $request->CGPA;
        $education->save();
        return redirect()->route('admin.education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $education = Education::find($id)->delete();
    }
}
