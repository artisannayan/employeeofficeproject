<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Departments;
use App\Models\PersonalDetails;
use App\Models\Membership;
use App\Models\Education;
use App\Models\Training;
use App\Models\WorkExperience;
use App\Models\References;
use App\Models\Phograph;
use App\Models\Certification;
use Image;
use File;
/**
 * Class AncolikbanglarController
 * @package App\Http\Controllers\Admin
 */

class EmpolyeeController extends Controller
{
    public function create(){
        return view('admin.employee.create');
    }
     /**
  *Personal Information Edit
 *
 *
 */
    public function index(){
        $data = PersonalDetails::all();
        // $data = Phograph::all();
        // $emId = $data[0]->EmployeeId;
        // $data = PersonalDetails:::where('EmployeeId', $emId)->get();
        return view('admin.employee.index',compact('data'));
    }
    /**
    *@peram
    *Personal Information Store
   *
   */
    public function store(Request $request)
    {

        $eid = $request->eid;
        $data = PersonalDetails::updateOrCreate(
         ['eid' => $request->eid],
         [
            'name' => $request->name,
            'position' => $request->position,
            'father_name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->father_name,
            'brother' => $request->mother_name,
            'sister' => $request->sister,
            'LgName' => $request->LgName,
            'reading' => $request->name,
            'speaking' => $request->speaking,
            'writing' => $request->writing,
            'dob' => $request->dob,
            'blood_group' => $request->blood_group,
            'NID' => $request->NID,
            'persent_add' => $request->persent_add,
            'height' => $request->height,
            'nationality' => $request->nationality,
         ]
         );
        // $personaldetail = new PersonalDetails();
        // $personaldetail->eid = $request->eid;
        // $empId = $request->eid;
        // $personaldetail->name          = $request->name;
        // $personaldetail->position      = $request->position;
        // $personaldetail->father_name   = $request->father_name;
        // $personaldetail->mother_name   = $request->mother_name;
        // $personaldetail->brother       = $request->brother;
        // $personaldetail->sister        = $request->sister;
        // $personaldetail->LgName        = $request->LgName;
        // $personaldetail->reading       = $request->reading;
        // $personaldetail->speaking      = $request->speaking;
        // $personaldetail->writing       = $request->writing;
        // $personaldetail->dob           = $request->dob;
        // $personaldetail->blood_group   = $request->blood_group;
        // $personaldetail->religion      = $request->religion;
        // $personaldetail->NID           = $request->NID;
        // $personaldetail->persent_add   = $request->persent_add;
        // $personaldetail->permanent_add = $request->permanent_add;
        // $personaldetail->nationality   = $request->nationality;
        // $personaldetail->save();
        // dd($empId);
        return view('admin.employee.edit',compact('eid','data'));

    }
    /**
    *@peram
    *MemberShip Store
   *
   */
    public function membershipStore(Request $request)
    {

        $eid = $request->emp_id;
            $data = Membership::updateOrCreate(
                ['emp_id' => $request->emp_id],
                ['details' => $request->details]
            );
            return view('admin.employee.edit',compact('eid','data'));

    }
     /**
    *@peram
    *Education Store
   *
   */
//   public function store(Request $request)
// {
//     // create new task
//     $rows = $request->input('rows');
// 	    foreach ($rows as $row)
// 	{
// 	    $charges[] = [
// 	        'course_id' => $request->input('Facture_id'),
// 	        'Title' => $row['Title'],
// 	        'Quantity' => $row['Quantity'],
// 	        'Price' => $row['Price'],
// 	    ];
// 	}

// 	Charge::insert($charges);
//     return redirect()->route('Charge.index')->with('success', 'Your task added successfully!');
// }


    public function upedu(Request $request){

        $emp_id = $request->emp_id;
        $eid = $request->emp_id;

        $rows = $request->input('rows');
            foreach ($rows as $row)
        {
                $udata[] =
                    [
                    'emp_id' => $request->emp_id,
                    'ExamName' => $row['ExamName'],
                    'board' => $row['board'],
                    'passing_year' => $row['passing_year'],
                    'group' => $row['group'],
                    'CGPA' => $row['CGPA']
                    ];
        }

        $data = Education::where('emp_id',$emp_id)->get();
        $val = false;
        if(is_null($data)){
            $data = Education::insert($udata);
            return redirect()->route('admin.employee.index');
        }
        else{
            $daletem = Education::where('emp_id',$emp_id)->get();
            foreach($daletem as $deldata){
               $deldata->delete();
            }
            $val = true;
        }
        if($val = true){
            $data = Education::insert($udata);
            return redirect()->route('admin.employee.index');
        }
        else{
            $val = false;
            return redirect()->route('admin.employee.index');
        }

    }


    public function EducationStore(Request $request)
    {
        $eid = $request->emp_id;
            $rows = $request->input('rows');
            foreach ($rows as $row)
        {
                $data[] =

                    [
                    'emp_id' => $request->emp_id,
                    'ExamName' => $row['ExamName'],
                    'board' => $row['board'],
                    'passing_year' => $row['passing_year'],
                    'group' => $row['group'],
                    'CGPA' => $row['CGPA']
                    ];
        }

        $data = Education::insert($data);
        return redirect()->route('admin.employee.index');
    }
      /**
    *@peram
    *
    *Training Store
    *
   */
    public function trainingStore(Request $request)
    {
        $emp_id = $request->emp_id;
        $eid = $request->emp_id;

        $rows = $request->input('rows');
            foreach ($rows as $row)
        {
                $trdata[] =
                    [
                    'emp_id' => $request->emp_id,
                    'name' => $row['name'],
                    'deration' => $row['deration'],
                    ];
        }

                $data = Training::where('emp_id',$emp_id)->get();
                $val = false;
                if(is_null($data)){
                    $data = Training::insert($trdata);
                    return redirect()->route('admin.employee.index');
                }
                else{
                    $daletem = Training::where('emp_id',$emp_id)->get();
                    foreach($daletem as $deldata){
                    $deldata->delete();
                    }
                    $val = true;
                }
                if($val = true){
                    $data = Training::insert($trdata);
                    return redirect()->route('admin.employee.index');
                }
                else{
                    $val = false;
                    return redirect()->route('admin.employee.index');
                }
            }
        // return view('admin.employee.edit',compact('eid','data'));

     /**
    *@peram
    *
    *WorkExperience Store & Update
    *
   */
    public function expererinceStore(Request $request)
    {
        $emp_id = $request->emp_id;
        $eid = $request->emp_id;

        $rows = $request->input('rows');
            foreach ($rows as $row)
        {
                $workdate[] =
                    [
                    'emp_id' => $request->emp_id,
                    'country_work' => $row['country_work'],
                    'best_work' => $row['best_work'],
                    'company_name' => $row['company_name'],
                    'position' => $row['position'],
                    'project_name' => $row['project_name'],
                    'responcibility' => $row['responcibility'],
                    'from' => $row['from'],
                    'to' => $row['to']
                    ];
        }

                $data = WorkExperience::where('emp_id',$emp_id)->get();
                $val = false;
                if(is_null($data)){
                    $data = WorkExperience::insert($workdate);
                    return redirect()->route('admin.employee.index');
                }
                else{
                    $daletem = WorkExperience::where('emp_id',$emp_id)->get();
                    foreach($daletem as $deldata){
                    $deldata->delete();
                    }
                    $val = true;
                }
                if($val = true){
                    $data = WorkExperience::insert($workdate);
                    return redirect()->route('admin.employee.index');
                }
                else{
                    $val = false;
                    return redirect()->route('admin.employee.index');
                }

          return view('admin.employee.edit',compact('eid','data'));
    }
     /**
    *@peram
    *
    *References Store
    *
   */
    public function referencesStore(Request $request)
    {

        $eid = $request->emp_id;
        $data = References::updateOrCreate(
           ['emp_id' => $request->emp_id],
         [
          'ComName'  => $request->ComName,
          'refname'  => $request->refname,
          'position'  => $request->position,
          'contact'  => $request->contact,
          'Details'  => $request->Details,
         ]
        );
        // $reference = new References();
        // $reference->emp_id = $request->emp_id;
        // $empId = $request->emp_id;
        // $reference->ComName = $request->ComName;
        // $reference->refname = $request->refname;
        // $reference->position = $request->position;
        // $reference->contact = $request->contact;
        // $reference->Details = $request->Details;
        // $reference->save();
        return view('admin.employee.edit',compact('eid','data'));
    }
     /**
    *@peram
    *
    *PhotoGraph Store And Update
    *
   */
    public function phographStore(Request $request)
    {
        //$photograph = new Phograph();
        // $photograph->emp_id = $request->emp_id;
        $eid = $request->emp_id;
        // $photograph->signature = $request->signature;

        if($request->image){
            $image = $request->file('image');
            $img = time(). '.' .$image->getClientOriginalExtension();
             $location = public_path('image/photograph/'.$img);
            Image::make($image)->save($location);
            // $photograph->image = $img;
        }
        // if($request->signature){
        //     $signature = $request->file('signature');
        //     $sig = time(). '.' .$signature->getClientOriginalExtension();
        //      $location = public_path('image/file/'.$sig);
        //     //  File::make($signature)->save($location);
        //     $created = File::create(["location" => $location.$signature]);
        //     // $photograph->image = $img;
        // }

        // if($request->image){
        //     if(File::exists('image/photograph/'.$data->image)){
        //         File::delete('image/photograph/'.$data->image);
        //     }
        //     $image = $request->file('image');
        //     $img = time(). '.' .$image->getClientOriginalExtension();
        //      $location = public_path('image/photograph/'.$img);
        //     Image::make($image)->resize(600,520)->save( $location);
        //     $data->image = $img;

        // }
        $data = Phograph::updateOrCreate(
            ['emp_id' => $request->emp_id],
            [
            'image'  => $img,
            // 'signature'  => $sig,
            ]
         );

        //$photograph->save();
        return view('admin.employee.edit',compact('eid','data'));
    }
     /**
    *@peram
    *
    *Cirtification Store
    *
   */
    public function cirtificationStore(Request $request)
    {
        $cirtification = new Certification();
        $cirtification->emp_id = $request->emp_id;
        $empId = $request->emp_id;
        $cirtification->name = $request->name;
        $cirtification->file = $request->file;
        $cirtification->save();
        return view('admin.employee.training', compact('empId'))->with('msg','Personal Details Insert Succuss');
    }


        /**
        * Edit Page
        *
        *
        */
    public function edit($id){
        // $data       = PersonalDetails::where('eid',$eid)->first();
        $eid = $id;
        //dd($eid);
         $data = PersonalDetails::find($eid);
        if(isset($data)){
            $data = PersonalDetails::find($eid);
        }
        else{
            $data = "";
        }

        // dd($data);
        //$pageTitle = "Edit Empolyee List";
       return view('admin.employee.edit', compact('data','eid'));
    }



    public function delete($eid)
    {

      PersonalDetails::where('eid',$eid)->delete();
      return back();
    }
   public function profile($eid){
     $data  = PersonalDetails::where('eid',$eid)->first();
     if(!is_null($data)){
        return view('admin.employee.profile',compact('data'));
     }else{
         return back();
     }
    // $educations = Education::all();
    // $membership = Membership::all();
    // $references = References::all();
    // $trainigs   = Training::all();
    // $photos     = Phograph::all();
   }

}
