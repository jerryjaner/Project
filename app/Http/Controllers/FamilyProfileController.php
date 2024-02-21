<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyProfile;
use App\Models\household_member;

class FamilyProfileController extends Controller
{
    //

    public function index(){

        return view('familyprofile.index');
    }
    public function store(Request $request){

        $validator = \Validator::make($request -> all(),[

            'firstname' => 'required',
            'lastname'  => 'required',
            'middlename' => 'required',
            'image'  => 'required',
            'address'  => 'required',
            'birthdate' => 'required',
            'age'  => 'required',
            'civil_status'  => 'required',
            'monthly_income'  => 'required',
            'occupation'  => 'required',
            'educational_level'  => 'required',
            'spouse_name' => 'required',
            'spouse_age'  => 'required',
            'spouse_occupation'  => 'required',
            'spouse_education_level' => 'required',
            'spouse_monthly_income' => 'required',
            'no_households' => 'required',
            'no_family'  => 'required',
            'occupancy_status' =>'required',
            'occupancy_period' =>'required',
            'interview_date' =>'required',

        ]);

        if($validator -> fails())
        {
            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        }
        else{

            $create_family = new FamilyProfile();
            $create_family -> lastname = $request -> lastname;
            $create_family -> firstname = $request -> firstname;
            $create_family -> middlename = $request -> middlename;
            $create_family -> address = $request -> address;
            $create_family -> birthdate = $request -> birthdate;
            $create_family -> age = $request -> age;
            $create_family -> civil_status = $request -> civil_status;
            $create_family -> monthly_income = $request -> monthly_income;
            $create_family -> occupation = $request -> occupation;
            $create_family -> educational_level = $request -> educational_level;
            $create_family -> spouse_name = $request -> spouse_name;
            $create_family -> spouse_age = $request -> spouse_age;
            $create_family -> spouse_occupation = $request -> spouse_occupation;
            $create_family -> spouse_education_level = $request -> spouse_education_level;
            $create_family -> spouse_monthly_income = $request -> spouse_monthly_income;
            $create_family -> no_households = $request -> no_households;
            $create_family -> no_family = $request -> no_family;
            $create_family -> occupancy_status = $request -> occupancy_status;
            $create_family -> occupany_period = $request -> occupany_period;
            $create_family -> interview_date = $request -> interview_date;

            if($request -> hasfile('image'))
            {

                $file = $request->file('image');
                $extension = $file -> getClientOriginalExtension();
                $filename = time() . '.' .$extension;
                $file->storeAs('public/family/profile/images', $filename);

                $create_family -> image = $filename;
            }
            $create_family -> save();



            $request->validate([

                'inputs.*.name' => 'required',
                'inputs.*.age' => 'required',
                'inputs.*.sex' => 'required',
                'inputs.*.relationship' => 'required',
                'inputs.*.sex' => 'required',
                'inputs.*.occupation' => 'required',
                'inputs.*.educational_level' => 'required'

            ]);



            // Insert the family profile ID into the family_profile_id field of household members
            foreach ($request->inputs as $key => $value) {
                $value['family_profile_id'] =  $create_family->id;
                household_member::create($value);
            }

            return response()->json([
                'code' => 200,
                'msg' => 'Family Profile Created Successfully',
            ]);


        }

    }
}
