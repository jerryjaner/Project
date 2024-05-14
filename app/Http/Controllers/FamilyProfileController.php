<?php

namespace App\Http\Controllers;

use App\Models\Household;
use Illuminate\Http\Request;
use App\Models\FamilyProfile;
use Illuminate\Support\Facades\Storage;

class FamilyProfileController extends Controller
{

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

        if($validator -> fails()){
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
            $create_family -> occupancy_period = $request -> occupancy_period;
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
                Household::create($value);
            }

            return response()->json([
                'code' => 200,
                'msg' => 'Family Profile Created Successfully',
            ]);


        }

    }


    public function fetch() {

        $datas = FamilyProfile::with('households')->get();
        $i = 1;
        $output = '';
        if ($datas->count() > 0) {
            $output .= '<div class="table-responsive">
            <table class="table table-striped align-end" id="sample">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>';

            foreach ($datas as $data) {
            $output .= '<tr>
                            <td>' . $i++ . '</td>
                            <td>' . $data->firstname . ' '. $data->middlename .' ' . $data->lastname . '</td>
                            <td>' . $data->address . '</td>
                            <td>' . $data->birthdate . '</td>
                            <td>' . $data->age . '</td>';        

            $output .= '<td>
                            <a href="#" id="' . $data->id . '" class="text-default  btn btn-success btn-sm mx-1 mb-1 edit" data-bs-toggle="modal" data-bs-target="#edit">Edit</a>
                            <a href="#" id="' . $data->id . '" class="text-default  btn btn-primary btn-sm mx-1 mb-1 view" data-bs-toggle="modal" data-bs-target="#view">View</a>
                            <a href="#" id="' . $data->id . '" class="text-default btn btn-danger btn-sm mx-1 mb-1 delete">Delete</a>
                            </td>
                        </tr>';
            }

            $output .= '</tbody></table></div>';

            echo $output;
        }
        else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }

	}


    public function view(Request $request) {

		$households = FamilyProfile::with('households')->find($request->id);

		return response()->json($households);
	}


    public function delete(Request $request) {

		$data = FamilyProfile::find($request->id);

        if (Storage::delete('public/family/profile/images/' . $data->image)) {

			FamilyProfile::destroy($request->id);
		}
        else{
            FamilyProfile::destroy($request->id);
        }


	}

    public function edit(Request $request) {

		$data = FamilyProfile::with('households')->find($request->id);

		return response()->json($data);
	}

    public function update(Request $request) {

		$update_family = FamilyProfile::find($request->edit_id);

        $validator = \Validator::make($request -> all(),[

            'firstname' => 'required',
            'lastname'  => 'required',
            'middlename' => 'required',
            // 'image'  => 'required',
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

        if($validator -> fails()){
            return response()->json([
                'code' => 0,
                'error' => $validator->errors()->toArray()
            ]);
        }
        else{


            $update_family -> firstname = $request -> firstname;
            $update_family -> address = $request -> address;
            $update_family -> birthdate = $request -> birthdate;
            $update_family -> age = $request -> age;
            $update_family -> civil_status = $request -> civil_status;
            $update_family -> monthly_income = $request -> monthly_income;
            $update_family -> occupation = $request -> occupation;
            $update_family -> educational_level = $request -> educational_level;
            $update_family -> spouse_name = $request -> spouse_name;
            $update_family -> spouse_age = $request -> spouse_age;
            $update_family -> spouse_occupation = $request -> spouse_occupation;
            $update_family -> spouse_education_level = $request -> spouse_education_level;
            $update_family -> lastname = $request -> lastname;
            $update_family -> spouse_monthly_income = $request -> spouse_monthly_income;
            $update_family -> middlename = $request -> middlename;
            $update_family -> no_households = $request -> no_households;
            $update_family -> no_family = $request -> no_family;
            $update_family -> occupancy_status = $request -> occupancy_status;
            $update_family -> occupancy_period = $request -> occupancy_period;
            $update_family -> interview_date = $request -> interview_date;

            $fileName = '';
            if($request ->hasfile('image'))
            {
                $file = $request->file('image');
                $extension = $file -> getClientOriginalExtension();
                $fileName = time() . '.' .$extension;
                $file->storeAs('public/family/profile/images', $fileName);
                if ($update_family->image){

                    Storage::delete('public/family/profile/images/' . $update_family->image);
                }
                $update_family -> image = $fileName;
            }
            $update_family -> update();

            // Household::where('family_profile_id', '=', $request -> user_id )
            // ->update([
            //             'name' => $request -> name,
            //             'age' => $request -> age,

            //         ]);

                // $request->validate([

                //     'inputs.*.name' => 'required',
                //     'inputs.*.age' => 'required',
                //     'inputs.*.sex' => 'required',
                //     'inputs.*.relationship' => 'required',
                //     'inputs.*.sex' => 'required',
                //     'inputs.*.occupation' => 'required',
                //     'inputs.*.educational_level' => 'required'

                // ]);

                // $update_household = Household::where('family_profile_id', '=', $request -> edit_id )-> update([



                // ]);




            return response()->json([
                'status' => 200,
            ]);

        }



	}


}
