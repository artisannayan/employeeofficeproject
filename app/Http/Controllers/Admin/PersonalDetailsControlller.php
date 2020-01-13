<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PersonalDetails;
use App\Models\Departments;
use App\Models\Education;
use App\Models\OthrerInfo;
use App\Models\UserEmployee;
use App\Models\Training;
use App\Models\Language;
use App\Models\Skill;
use App\Models\Phograph;



class PersonalDetailsControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
          // $this->validate($request, [
        //     'user_id'                 =>  'required|max:11',
        //     'name'                	  =>  'required|max:191',
        //     'position'                =>  'required',
        //     'father_name'          	  =>  'required',
        //     'mother_name'          	  =>  'required',
        //     'brother'          		  =>  'required',
        //     'sister'          		  =>  'required',
        //     'dob'          		      =>  'required',
        //     'religion'          	  =>  'required',
        //     'blood_group'          	  =>  'required',
        //     'NID'          		      =>  'required',
        //     'persent_add'          	  =>  'required',
        //     'permanent_add'           =>  'required',
        //     'isActive'				  =>  'required',
        // ]);
        // $personaldetail = new PersonalDetails();
        // $personaldetail->user_id = $request->user_id;
        // $personaldetail->name  = $request->name;
        // $personaldetail->father_name = $request->father_name;
        // $personaldetail->mother_name = $request->mother_name;
        // $personaldetail->brother = $request->brother;
        // $personaldetail->sister = $request->sister;
        // $personaldetail->dob = $request->dob;
        // $personaldetail->blood_group = $request->blood_group;
        // $personaldetail->religion = $request->religion;
        // $personaldetail->NID = $request->NID;
        // $personaldetail->persent_add = $request->persent_add;
        // $personaldetail->permanent_add = $request->permanent_add;
        // $personaldetail->nationality = $request->nationality;
        // $personaldetail->save();

//Trainig Section Start
        // $education = new  Education();
        // $education->user_id = $request->user_id;
        // $education->ExamName = $request->ExamName;
        // $education->board = $request->board;
        // $education->group = $request->group;
        // $education->passing_year = $request->passing_year;
        // $education->CGPA = $request->CGPA;
        // $education->save();

        // $trining = new Training();
        // $trining->user_id = $request->user_id;
        // $trining->name = $request->name;
        // $trining->deration = $request->deration;
        // $trining->organisation = $request->organisation;
        // $trining->save();
//Trainig Section End

//Other Information Section Start
        // $othrers = new OthrerInfo();
        // $othrers->user_id = $request->user_id;
        // $othrers->countryWork = $request->countryWork;
        // $othrers->memberShipp = $request->memberShipp;
        // $othrers->bestWork = $request->bestWork;
        // $othrers->save();

        // $language = new Language();
        // $language->user_id = $request->user_id;
        // $language->lgname = $request->lgname;
        // $language->speak = $request->speak;
        // $language->reading = $request->reading;
        // $language->writing = $request->writing;
        // $language->save();

        // $skill = new Skill();
        // $skill->user_id = $request->user_id;
        // $skill->Description = $request->Description;
        // $skill->save();

//Other Information Section End

        return redirect()->route('admin.employee.index');
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
